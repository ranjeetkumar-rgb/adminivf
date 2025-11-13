<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('permission:view-users|create-users|edit-users|delete-users', ['only' => ['index','show']]);
        $this->middleware('permission:create-users', ['only' => ['create','store']]);
        $this->middleware('permission:edit-users', ['only' => ['edit','update']]);
        $this->middleware('permission:delete-users', ['only' => ['destroy']]);
    }

    public function index()
    {

        $users = User::get();
        return view('admin.manage-users.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $roles = Role::all();
        return view('admin.manage-users.create', compact('roles'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
            'role_id' => 'nullable|exists:roles,id',    
            'image' => 'nullable|file|image|mimes:jpg,jpeg,png,gif,webp|max:10240',
        ], [
            'image.image' => 'The uploaded file must be a valid image.',
            'image.mimes' => 'The image must be a file of type: jpg, jpeg, png, gif, webp.',
            'image.max' => 'The image may not be greater than 10MB.',
        ]);
        $validated['password'] = Hash::make($validated['password']);

        if ($request->hasFile('image') && $request->file('image')->isValid()) {
            $validated['image'] = $request->file('image')->store('users', 'public');
        }

        $user = User::create($validated);

        // Assign role if provided
        if ($request->filled('role_id')) {
            $role = Role::find($request->role_id);
            if ($role) {
                $user->assignRole($role->name);
            }
        }

        return redirect()->route('manage-users.index')->with('success', 'User created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $user = User::findOrFail($id);
        return view('admin.manage-users.view', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $user = User::findOrFail($id);
        $roles = Role::all();
        $isCurrentUserAdmin = auth()->user()->hasRole('admin');
        return view('admin.manage-users.edit', compact('user', 'roles', 'isCurrentUserAdmin'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $user = User::findOrFail($id);
        $isCurrentUserAdmin = auth()->user()->hasRole('admin');
        
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users,email,' . $user->id,
            'password' => 'nullable|string|min:6|confirmed',
            'role_id' => 'nullable|exists:roles,id',
            'image' => 'nullable|file|image|mimes:jpg,jpeg,png,gif,webp|max:10240',
        ], [
            'image.image' => 'The uploaded file must be a valid image.',
            'image.mimes' => 'The image must be a file of type: jpg, jpeg, png, gif, webp.',
            'image.max' => 'The image may not be greater than 10MB.',
        ]);
        
        if ($validated['password']) {
            $validated['password'] = Hash::make($validated['password']);
        } else {
            unset($validated['password']);
        }

        if ($request->hasFile('image') && $request->file('image')->isValid()) {
            // Delete old image if exists
            if ($user->image && \Storage::disk('public')->exists($user->image)) {
                \Storage::disk('public')->delete($user->image);
            }
            $validated['image'] = $request->file('image')->store('users', 'public');
        }
        
        $user->update($validated);

        // Update role if current user is admin or if updating own profile
        if ($isCurrentUserAdmin || auth()->id() == $user->id) {
            if ($request->filled('role_id')) {
                $role = Role::find($request->role_id);
                if ($role) {
                    $user->syncRoles([$role->name]);
                    \Log::info('User role updated successfully', [
                        'user_id' => $user->id,
                        'new_role' => $role->name,
                        'updated_by' => auth()->id()
                    ]);
                }
            } else {
                $user->syncRoles([]);
                \Log::info('User roles cleared', [
                    'user_id' => $user->id,
                    'updated_by' => auth()->id()
                ]);
            }
        } else {
            // Log for debugging - user doesn't have permission to update roles
            \Log::info('User role update blocked: Current user is not admin and not updating own profile', [
                'current_user_id' => auth()->id(),
                'current_user_is_admin' => $isCurrentUserAdmin,
                'target_user_id' => $user->id,
                'requested_role_id' => $request->role_id
            ]);
        }

        return redirect()->route('manage-users.index')->with('success', 'User updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $user = User::findOrFail($id);

        // Prevent deletion of admin users
        if ($user->hasRole('admin')) {
            return redirect()->route('manage-users.index')->with('error', 'Admin users cannot be deleted for security reasons.');
        }

        // Delete user image if it exists
        if ($user->image && \Storage::disk('public')->exists($user->image)) {
            \Storage::disk('public')->delete($user->image);
        }

        $user->delete();
        return redirect()->route('manage-users.index')->with('success', 'User deleted successfully.');
    }
}
