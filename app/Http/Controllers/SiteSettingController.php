<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SiteSetting;
use Illuminate\Support\Facades\Cache;

class SiteSettingController extends Controller
{
    public function __construct()
    {
        $this->middleware('permission:view-site-settings|create-site-settings|edit-site-settings|delete-site-settings', ['only' => ['index','show']]);
        $this->middleware('permission:create-site-settings', ['only' => ['create','store']]);
        $this->middleware('permission:edit-site-settings', ['only' => ['edit','update']]);
        $this->middleware('permission:delete-site-settings', ['only' => ['destroy']]);
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $siteSetting = SiteSetting::first();
        return view('admin.site-setting.index', compact('siteSetting'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.site-setting.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'site_name' => 'required|string|max:255',
            'site_email' => 'required|email|max:255',
            'site_logo' => 'nullable|image|mimes:jpg,jpeg,png,gif,webp|max:2048',
            'site_favicon' => 'nullable|image|mimes:jpg,jpeg,png,gif,ico,webp|max:1024',
            'contact_phone' => 'nullable|string|max:255',
            'whatsapp_number' => 'nullable|string|max:255',
            'contact_address' => 'nullable|string',
            'facebook_url' => 'nullable|url',
            'twitter_url' => 'nullable|url',
            'instagram_url' => 'nullable|url',
            'youtube_url' => 'nullable|url',
            'linkedin_url' => 'nullable|url',
            'copyright_text' => 'nullable|string|max:255',
        ]);

        $siteSetting = new SiteSetting($validated);

        if ($request->hasFile('site_logo')) {
            try {
                $logoPath = $siteSetting->uploadImage($request->file('site_logo'), 'site_logo', [
                    'max_width' => 300,
                    'max_height' => 100,
                    'quality' => 90,
                ]);
                $siteSetting->site_logo = $logoPath;
            } catch (\Exception $e) {
                return redirect()->back()->with('error', 'Error uploading logo: ' . $e->getMessage())->withInput();
            }
        }

        if ($request->hasFile('site_favicon')) {
            try {
                $faviconPath = $siteSetting->uploadImage($request->file('site_favicon'), 'site_favicon', [
                    'max_width' => 64,
                    'max_height' => 64,
                    'quality' => 95,
                ]);
                $siteSetting->site_favicon = $faviconPath;
            } catch (\Exception $e) {
                return redirect()->back()->with('error', 'Error uploading favicon: ' . $e->getMessage())->withInput();
            }
        }

        $siteSetting->save();
        return redirect()->route('admin.site-settings.index')->with('success', 'Site settings created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $siteSetting = SiteSetting::findOrFail($id);
        return view('admin.site-settings.show', compact('siteSetting'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $siteSetting = SiteSetting::findOrFail($id);
        return view('admin.site-setting.edit', compact('siteSetting'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $siteSetting = SiteSetting::findOrFail($id);
        $validated = $request->validate([
            'site_name' => 'required|string|max:255',
            'site_email' => 'required|email|max:255',
            'site_logo' => 'nullable|image|mimes:jpg,jpeg,png,gif,webp|max:2048',
            'site_favicon' => 'nullable|image|mimes:jpg,jpeg,png,gif,ico,webp|max:1024',
            'contact_phone' => 'nullable|string|max:255',
            'whatsapp_number' => 'nullable|string|max:255',
            'contact_address' => 'nullable|string',
            'facebook_url' => 'nullable|url',
            'twitter_url' => 'nullable|url',
            'instagram_url' => 'nullable|url',
            'youtube_url' => 'nullable|url',
            'linkedin_url' => 'nullable|url',
            'copyright_text' => 'nullable|string|max:255',
        ]);

        if ($request->hasFile('site_logo')) {
            try {
                $logoPath = $siteSetting->uploadImage($request->file('site_logo'), 'site_logo', [
                    'max_width' => 300,
                    'max_height' => 100,
                    'quality' => 90,
                ]);
                $validated['site_logo'] = $logoPath;
            } catch (\Exception $e) {
                return redirect()->back()->with('error', 'Error uploading logo: ' . $e->getMessage())->withInput();
            }
        }

        if ($request->hasFile('site_favicon')) {
            try {
                $faviconPath = $siteSetting->uploadImage($request->file('site_favicon'), 'site_favicon', [
                    'max_width' => 64,
                    'max_height' => 64,
                    'quality' => 95,
                ]);
                $validated['site_favicon'] = $faviconPath;
            } catch (\Exception $e) {
                return redirect()->back()->with('error', 'Error uploading favicon: ' . $e->getMessage())->withInput();
            }
        }

        $siteSetting->update($validated);
        Cache::forget('site_settings');
        return redirect()->route('admin.site-settings.index')->with('success', 'Site settings updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $siteSetting = SiteSetting::findOrFail($id);
        $siteSetting->delete();
        return redirect()->route('admin.site-settings.index')->with('success', 'Site settings deleted successfully.');
    }
}
