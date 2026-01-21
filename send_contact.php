<?php
// send_contact.php
// Trimite cererea din formular către o adresă (ex: y.x@gmail.com) folosind PHPMailer + SMTP (Gmail)

// ===================== 1) Acceptăm doar POST =====================
if ($_SERVER["REQUEST_METHOD"] !== "POST") {
    header("Location: contact.php");
    exit;
}

// ===================== 2) Preluare + curățare date =====================
$nume     = trim($_POST["nume"] ?? "");
$companie = trim($_POST["companie"] ?? "");
$telefon  = trim($_POST["telefon"] ?? "");
$email    = trim($_POST["email"] ?? "");
$mesaj    = trim($_POST["mesaj"] ?? "");

// ===================== 3) Validare minimă =====================
if ($nume === "" || $telefon === "" || $email === "" || $mesaj === "") {
    header("Location: contact.php?success=0&err=missing");
    exit;
}
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    header("Location: contact.php?success=0&err=email");
    exit;
}

// ===================== 4) PHPMailer (structura: /PHPMailer/src/*.php) =====================
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require __DIR__ . "/PHPMailer/src/Exception.php";
require __DIR__ . "/PHPMailer/src/PHPMailer.php";
require __DIR__ . "/PHPMailer/src/SMTP.php";

// ===================== 5) DESTINATAR (schimbi aici) =====================
$toEmail = "comenzionline.ft@ro.post"; // <-- AICI pui emailul unde vrei să ajungă cererea
$toName  = "Destinatar Cereri";

// ===================== 6) Subiect + corp =====================
$subject = "Cerere ofertă — Fabrica de Timbre";

$bodyText =
"Cerere nouă primită de pe site (formular contact)\n\n" .
"Nume: {$nume}\n" .
"Companie: " . ($companie !== "" ? $companie : "-") . "\n" .
"Telefon: {$telefon}\n" .
"Email: {$email}\n\n" .
"Mesaj:\n{$mesaj}\n";

$bodyHtml = nl2br(htmlspecialchars($bodyText, ENT_QUOTES, "UTF-8"));

// ===================== 7) SMTP (Gmail) - completezi cu datele tale =====================
// IMPORTANT:
// 1) Activezi 2FA pe contul Gmail folosit la trimitere
// 2) Generezi "App Password" și îl pui la $SMTP_PASS
$SMTP_HOST = "smtp.gmail.com";
$SMTP_PORT = 587; // 587 = STARTTLS
$SMTP_USER = "maria.ardeleanu@ro.post";      // <-- emailul cu care TRIMIȚI
$SMTP_PASS = "fidu dekf frop dkqy";         // <-- App Password (16 caractere)
$FROM_NAME = "Formular site — Fabrica de Timbre";

try {
    $mail = new PHPMailer(true);

    // ===================== DEBUG (lasă ON pentru test) =====================
    // Dacă merge, poți comenta liniile de mai jos și rămâne doar redirect.
   // $mail->SMTPDebug = 2;
    //$mail->Debugoutput = 'html';

    // ===================== SMTP =====================
    $mail->isSMTP();
    $mail->Host       = $SMTP_HOST;
    $mail->SMTPAuth   = true;
    $mail->Username   = $SMTP_USER;
    $mail->Password   = $SMTP_PASS;
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Port       = $SMTP_PORT;

    // ===================== Setări email =====================
    $mail->CharSet = "UTF-8";
    $mail->setFrom($SMTP_USER, $FROM_NAME);

    // Destinatar
    $mail->addAddress($toEmail, $toName);

    // Reply-To = emailul din formular (ca să poți răspunde direct)
    $mail->addReplyTo($email, $nume);

    // Conținut
    $mail->isHTML(true);
    $mail->Subject = $subject;
    $mail->Body    = $bodyHtml;
    $mail->AltBody = $bodyText;

    // Trimitere
    $mail->send();

    // Dacă vrei redirect după ce funcționează (și scoți debug), lasă:
    header("Location: contact.php?success=1");
    exit;

} catch (Exception $e) {
    // Pentru debugging: afișează eroarea reală
    echo "Eroare la trimitere: " . htmlspecialchars($mail->ErrorInfo);
    exit;

    // Când vrei fără debug, folosește redirect:
    // header("Location: contact.php?success=0&err=send");
    // exit;
}
