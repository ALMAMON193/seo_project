<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
<div class="email-container" style="font-family: Arial, sans-serif; padding: 20px;">
    <div class="email-header" style="font-weight: bold; font-size: 18px; color: #333;">
        Your membership of the International MAOI Expert Group has expired.
    </div>
    <br>
    <div class="email-body" style="font-size: 16px; color: #555;">
        <p>Dear {{ $membership->user->name ?? 'User' }},</p>
        <br>
        <p>Please consider purchasing a new membership if you want to continue accessing the website and the Roundtable discussion group on Topicbox.</p>
    </div>
    <br>
    <div class="email-footer" style="font-size: 14px; color: #333;">
        <p>Sincerely,</p>
        <p>The International MAOI Expert Group</p>
    </div>
</div>
</body>
</html>
