<?php

echo "BCRYPT = " . password_hash("123456", PASSWORD_BCRYPT);
echo "<br>AUTO = " . password_hash("123456", PASSWORD_DEFAULT);
echo "<br>ARGON2ID = " . password_hash("123456", PASSWORD_ARGON2ID);
echo "<br>MD5 = " . md5("Philippe" . "Clé de salage") . "<br>";

if (password_verify('123456', '$2y$13$P4y4dltAhhaqgcB6KXGVReaX4SP7ZDjG6uUvqdzOKOZXyN9NIraea')) {
    echo 'Le mot de passe est valide !';
} else {
    echo 'Le mot de passe est invalide.';
}