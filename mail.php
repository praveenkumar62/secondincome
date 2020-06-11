<?php
    list($name, $phone, $email, $message) = array_values($_POST);


    $email_to = "care@secondincome.xyz";
    $sender_name = "SecondIncome Administrator";

    $subject = "Second Income - New User Contacted";
    $body = '<!DOCTYPE html>
        <html lang="en">
        <head>
            <style>
            td {
            padding: 9px 15px;
            text-align: center;
            }
            </style>
        </head>
        <body>
        <p>Hi Team,</h1>
        <table border="1" border-spacing="" style="border-collapse:collapse;">
        <tr>
            <td>Name:</td>
            <td>'.$name.'</td>
        </tr>
        <tr>
            <td>Email:</td>
            <td>'.$email.'</td>
        </tr>
        <tr>
            <td>Phone:</td>
            <td>'.$phone.'</td>
        </tr>
        <tr>
            <td>Message:</td>
            <td>'.$message.'</td>
        </tr>
        </table>
        </body>
        </html>';

    $headers = array(
        'Authorization: Bearer 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',
        'Content-Type: application/json'
    );

    $data = array(
        "personalizations" => array(
            array(
                "to" => array(
                    array(
                        "email" => $email_to,
                        "name" => $sender_name
                    )
                )
            )
        ),
        "from" => array(
            "email" => "secondincome.xyz@gmail.com"
        ),
        "subject" => $subject,
        "content" => array(
            array(
                "type" => "text/html",
                "value" => $body
            )
        )
    );

    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, "https://api.sendgrid.com/v3/mail/send");
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));
    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    $response = curl_exec($ch);
    curl_close($ch);

    echo $response;

    header('Location: confirmation.php');
?>