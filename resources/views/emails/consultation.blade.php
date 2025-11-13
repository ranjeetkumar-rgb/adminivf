<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>New Consultation Request</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            color: #333;
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
        }
        .header {
            background: linear-gradient(135deg, #3e73b9, #d45276);
            color: white;
            padding: 30px;
            text-align: center;
            border-radius: 10px 10px 0 0;
        }
        .content {
            background: #f9f9f9;
            padding: 30px;
            border-radius: 0 0 10px 10px;
        }
        .info-row {
            display: flex;
            margin-bottom: 15px;
            border-bottom: 1px solid #eee;
            padding-bottom: 15px;
        }
        .label {
            font-weight: bold;
            width: 150px;
            color: #3e73b9;
        }
        .value {
            flex: 1;
        }
        .footer {
            text-align: center;
            margin-top: 30px;
            padding-top: 20px;
            border-top: 1px solid #eee;
            color: #666;
            font-size: 14px;
        }
    </style>
</head>
<body>
    <div class="header">
        <h1>New Consultation Request</h1>
        <p>India IVF Srinagar</p>
    </div>
    
    <div class="content">
        <h2>Patient Information</h2>
        
        <div class="info-row">
            <div class="label">Name:</div>
            <div class="value">{{ $consultation['first_name'] }} {{ $consultation['last_name'] }}</div>
        </div>
        
        <div class="info-row">
            <div class="label">Phone:</div>
            <div class="value">{{ $consultation['phone'] }}</div>
        </div>
        
        @if($consultation['email'])
        <div class="info-row">
            <div class="label">Email:</div>
            <div class="value">{{ $consultation['email'] }}</div>
        </div>
        @endif
        
        <div class="info-row">
            <div class="label">Age:</div>
            <div class="value">{{ $consultation['age'] }}</div>
        </div>
        
        <div class="info-row">
            <div class="label">Treatment Interest:</div>
            <div class="value">{{ $consultation['treatment'] }}</div>
        </div>
        
        @if($consultation['message'])
        <div class="info-row">
            <div class="label">Additional Info:</div>
            <div class="value">{{ $consultation['message'] }}</div>
        </div>
        @endif
        
        <div class="info-row">
            <div class="label">Submitted:</div>
            <div class="value">{{ $consultation['created_at'] }}</div>
        </div>
        
        <div class="info-row">
            <div class="label">IP Address:</div>
            <div class="value">{{ $consultation['ip_address'] }}</div>
        </div>
        
        <div class="footer">
            <p><strong>India IVF Srinagar</strong></p>
            <p>Bypass Road, Hyderpora, Srinagar, Jammu & Kashmir - 190014</p>
            <p>Phone: +91-9999999999 | Email: srinagar@indiaivf.in</p>
        </div>
    </div>
</body>
</html> 