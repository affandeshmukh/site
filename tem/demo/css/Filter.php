<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Example of CSS3 Blur Filter Effect</title>
<style>
img.blur {
    -webkit-filter: blur(2px); /* Chrome, Safari, Opera */
    filter: blur(2px);
}
img.extra-blur {
    -webkit-filter: blur(5px); /* Chrome, Safari, Opera */
    filter: blur(5px);
}
/* Some CSS to beautify this example */
table td{
    padding: 10px;
    text-align: center;
}
</style>
</head>
<body>
    <table>
        <tr>
            <td>
                <img src="/site/tem/images/parrot.png" alt="Parrot">
            </td>
            <td>
                <img class="blur" src="/site/tem/images/parrot.png" alt="Parrot">
            </td>
            <td>
                <img class="extra-blur" src="/site/tem/images/parrot.png" alt="Parrot">
            </td>
        </tr>
        <tr>
            <td>Original Image</td>
            <td>blur(2px)</td>
            <td>blur(5px)</td>
        </tr>
    </table>
</body>
</html>