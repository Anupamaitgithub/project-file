<!DOCTYPE html>
<html>

<head>
    <h1 style="text-align:center">Contact Us Form</h1>
</head>

<body>
    <form method="POST" action="index.php">
        <table>
            <tr>
                <td>Full Name:</td>
                <td><input type="text" maxlength="20" pattern="[A-Za-z]{1,32}" name="name" placeholder="Enter Your Name" required /></td>
            </tr>
            <tr>
                <td>Phone Number:</td>
                <td><input type="number" name="phone" placeholder="Enter Your Mobile Number" required /></td>
            </tr>
            <tr>
                <td>Email:</td>
                <td><input type="email" name="email" id="email" placeholder="Enter Your Email-Id" required /></td>
            </tr>
            <tr>
                <td>Subject:</td>
                <td><input type="text" name="subject" placeholder="Subject" required /></td>
            </tr>
            <tr>
                <td>Message:</td>
                <td><textarea id="message" name="msg" placeholder="Message" required></textarea></td>
            </tr>
            <tr>

                <td><input type="submit" value="Submit"> </td>
            </tr>
        </table>
    </form>
</body>

</html>