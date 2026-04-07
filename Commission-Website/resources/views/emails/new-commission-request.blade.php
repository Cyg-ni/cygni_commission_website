<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>New Commission Request</title>
</head>
<body style="font-family: Arial, sans-serif; color: #0f172a; line-height: 1.5;">
    <h2 style="margin-bottom: 8px;">New Commission Request</h2>
    <p style="margin-top: 0;">A new commission was submitted from your contact form.</p>

    <table cellpadding="8" cellspacing="0" border="1" style="border-collapse: collapse; border-color: #cbd5e1; width: 100%; max-width: 720px;">
        <tr>
            <td><strong>Name</strong></td>
            <td>{{ $commission->commissioner_name }}</td>
        </tr>
        <tr>
            <td><strong>Email</strong></td>
            <td>{{ $commission->commissioner_email }}</td>
        </tr>
        <tr>
            <td><strong>Discord</strong></td>
            <td>{{ $commission->commissioner_discord ?: 'N/A' }}</td>
        </tr>
        <tr>
            <td><strong>Commission Type</strong></td>
            <td>{{ $commission->commission_type }}</td>
        </tr>
        <tr>
            <td><strong>Budget</strong></td>
            <td>{{ $commission->budget ?: 'N/A' }}</td>
        </tr>
        <tr>
            <td><strong>Deadline</strong></td>
            <td>{{ optional($commission->deadline)->format('Y-m-d') ?? 'N/A' }}</td>
        </tr>
        <tr>
            <td><strong>Project Brief</strong></td>
            <td>{{ $commission->project_brief }}</td>
        </tr>
        <tr>
            <td><strong>Additional Notes</strong></td>
            <td>{{ $commission->notes ?: 'N/A' }}</td>
        </tr>
        <tr>
            <td><strong>Submitted At</strong></td>
            <td>{{ $commission->created_at?->format('Y-m-d H:i:s') }}</td>
        </tr>
    </table>
</body>
</html>
