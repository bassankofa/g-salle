<?php

use Symfony\Component\Translation\MessageCatalogue;

$catalogue = new MessageCatalogue('sq', array (
  'validators' => 
  array (
    'This value should be false.' => 'Kjo vlerë duhet të jetë e pavërtetë (false).',
    'This value should be true.' => 'Kjo vlerë duhet të jetë e vërtetë (true).',
    'This value should be of type {{ type }}.' => 'Kjo vlerë duhet të jetë e llojit {{ type }}.',
    'This value should be blank.' => 'Kjo vlerë duhet të jetë e zbrazët.',
    'The value you selected is not a valid choice.' => 'Vlera që keni zgjedhur nuk është alternativë e vlefshme.',
    'You must select at least {{ limit }} choice.|You must select at least {{ limit }} choices.' => 'Duhet të zgjedhni së paku {{ limit }} alternativë.|Duhet të zgjedhni së paku {{ limit }} alternativa.',
    'You must select at most {{ limit }} choice.|You must select at most {{ limit }} choices.' => 'Duhet të zgjedhni më së shumti {{ limit }} alternativë.|Duhet të zgjedhni më së shumti {{ limit }} alternativa.',
    'One or more of the given values is invalid.' => 'Një apo më shumë nga vlerat e dhëna janë të pavlefshme.',
    'This field was not expected.' => 'Kjo fushë nuk pritej.',
    'This field is missing.' => 'Kjo fushë mungon.',
    'This value is not a valid date.' => 'Kjo vlerë nuk është datë e vlefshme.',
    'This value is not a valid datetime.' => 'Kjo vlerë nuk është datë-kohë e vlefshme.',
    'This value is not a valid email address.' => 'Kjo vlerë nuk është adresë email-i e vlefshme.',
    'The file could not be found.' => 'File nuk mund të gjindej.',
    'The file is not readable.' => 'File nuk është i lexueshëm.',
    'The file is too large ({{ size }} {{ suffix }}). Allowed maximum size is {{ limit }} {{ suffix }}.' => 'File është shumë i madh ({{ size }} {{ suffix }}). Madhësia maksimale e lejuar është {{ limit }} {{ suffix }}.',
    'The mime type of the file is invalid ({{ type }}). Allowed mime types are {{ types }}.' => 'Lloji mime i file-it është i pavlefshëm ({{ type }}). Llojet mime të lejuara janë {{ types }}.',
    'This value should be {{ limit }} or less.' => 'Kjo vlerë duhet të jetë {{ limit }} ose më pak.',
    'This value is too long. It should have {{ limit }} character or less.|This value is too long. It should have {{ limit }} characters or less.' => 'Kjo vlerë është shumë e gjatë. Duhet të përmbaj {{ limit }} karakter ose më pak.|Kjo vlerë është shumë e gjatë. Duhet të përmbaj {{ limit }} karaktere ose më pak.',
    'This value should be {{ limit }} or more.' => 'Kjo vlerë duhet të jetë {{ limit }} ose më shumë.',
    'This value is too short. It should have {{ limit }} character or more.|This value is too short. It should have {{ limit }} characters or more.' => 'Kjo vlerë është shumë e shkurtër. Duhet të përmbaj {{ limit }} karakter ose më shumë.|Kjo vlerë është shumë e shkurtër. Duhet të përmbaj {{ limit }} karaktere ose më shumë.',
    'This value should not be blank.' => 'Kjo vlerë nuk duhet të jetë e zbrazët.',
    'This value should not be null.' => 'Kjo vlerë nuk duhet të jetë null.',
    'This value should be null.' => 'Kjo vlerë duhet të jetë null.',
    'This value is not valid.' => 'Kjo vlerë nuk është e vlefshme.',
    'This value is not a valid time.' => 'Kjo vlerë nuk është kohë e vlefshme.',
    'This value is not a valid URL.' => 'Kjo vlerë nuk është URL e vlefshme.',
    'The two values should be equal.' => 'Këto dy vlera duhet të jenë të barabarta.',
    'The file is too large. Allowed maximum size is {{ limit }} {{ suffix }}.' => 'Ky file është shumë i madh. Madhësia maksimale e lejuar është {{ limit }} {{ suffix }}.',
    'The file is too large.' => 'Ky file është shumë i madh.',
    'The file could not be uploaded.' => 'Ky file nuk mund të ngarkohet.',
    'This value should be a valid number.' => 'Kjo vlerë duhet të jetë numër i vlefshëm.',
    'This file is not a valid image.' => 'Ky file nuk është imazh i vlefshëm.',
    'This is not a valid IP address.' => 'Kjo adresë IP nuk është e vlefshme.',
    'This value is not a valid language.' => 'Kjo vlerë nuk është gjuhë e vlefshme.',
    'This value is not a valid locale.' => 'Kjo vlerë nuk është nje locale i vlefshëm.',
    'This value is not a valid country.' => 'Kjo vlerë nuk është shtet i vlefshëm.',
    'This value is already used.' => 'Kjo vlerë është tashmë në përdorim.',
    'The size of the image could not be detected.' => 'Madhësia e imazhit nuk mund të zbulohet.',
    'The image width is too big ({{ width }}px). Allowed maximum width is {{ max_width }}px.' => 'Gjerësia e imazhit është shumë e madhe ({{ width }}px). Gjerësia maksimale e lejuar është {{ max_width }}px.',
    'The image width is too small ({{ width }}px). Minimum width expected is {{ min_width }}px.' => 'Gjerësia e imazhit është shumë e vogël ({{ width }}px). Gjerësia minimale e pritur është {{ min_width }}px.',
    'The image height is too big ({{ height }}px). Allowed maximum height is {{ max_height }}px.' => 'Gjatësia e imazhit është shumë e madhe ({{ height }}px). Gjatësia maksimale e lejuar është {{ max_height }}px.',
    'The image height is too small ({{ height }}px). Minimum height expected is {{ min_height }}px.' => 'Gjatësia e imazhit është shumë e vogël ({{ height }}px). Gjatësia minimale e pritur është {{ min_height }}px.',
    'This value should be the user\'s current password.' => 'Kjo vlerë duhet të jetë fjalëkalimi aktual i përdoruesit.',
    'This value should have exactly {{ limit }} character.|This value should have exactly {{ limit }} characters.' => 'Kjo vlerë duhet të ketë saktësisht {{ limit }} karakter.|Kjo vlerë duhet të ketë saktësisht {{ limit }} karaktere.',
    'The file was only partially uploaded.' => 'Ky file është ngarkuar pjesërisht.',
    'No file was uploaded.' => 'Nuk është ngarkuar ndonjë file.',
    'No temporary folder was configured in php.ini.' => 'Asnjë folder i përkohshëm nuk është konfiguruar në php.ini.',
    'Cannot write temporary file to disk.' => 'Nuk mund të shkruhet file i përkohshëm në disk.',
    'A PHP extension caused the upload to fail.' => 'Një ekstension i PHP-së shkaktoi dështimin e ngarkimit.',
    'This collection should contain {{ limit }} element or more.|This collection should contain {{ limit }} elements or more.' => 'Ky koleksion duhet të përmbajë {{ limit }} element ose më shumë.|Ky koleksion duhet të përmbajë {{ limit }} elemente ose më shumë.',
    'This collection should contain {{ limit }} element or less.|This collection should contain {{ limit }} elements or less.' => 'Ky koleksion duhet të përmbajë {{ limit }} element ose më pak.|Ky koleksion duhet të përmbajë {{ limit }} elemente ose më pak.',
    'This collection should contain exactly {{ limit }} element.|This collection should contain exactly {{ limit }} elements.' => 'Ky koleksion duhet të përmbajë saktësisht {{ limit }} element.|Ky koleksion duhet të përmbajë saktësisht {{ limit }} elemente.',
    'Invalid card number.' => 'Numër karte i pavlefshëm.',
    'Unsupported card type or invalid card number.' => 'Lloj karte i papranuar ose numër karte i pavlefshëm.',
    'This is not a valid International Bank Account Number (IBAN).' => 'Ky nuk është një numër i vlefshëm ndërkombëtar i llogarisë bankare (IBAN).',
    'This value is not a valid ISBN-10.' => 'Kjo vlerë nuk është një ISBN-10 e vlefshme.',
    'This value is not a valid ISBN-13.' => 'Kjo vlerë nuk është një ISBN-13 e vlefshme.',
    'This value is neither a valid ISBN-10 nor a valid ISBN-13.' => 'Kjo vlerë nuk është as ISBN-10 e vlefshme as ISBN-13 e vlefshme.',
    'This value is not a valid ISSN.' => 'Kjo vlerë nuk është një ISSN e vlefshme.',
    'This value is not a valid currency.' => 'Kjo vlerë nuk është një monedhë e vlefshme.',
    'This value should be equal to {{ compared_value }}.' => 'Kjo vlerë duhet të jetë e barabartë me {{ compared_value }}.',
    'This value should be greater than {{ compared_value }}.' => 'Kjo vlerë duhet të jetë më e madhe se {{ compared_value }}. ',
    'This value should be greater than or equal to {{ compared_value }}.' => 'Kjo vlerë duhet të jetë më e madhe ose e barabartë me {{ compared_value }}.',
    'This value should be identical to {{ compared_value_type }} {{ compared_value }}.' => 'Kjo vlerë duhet të jetë identike me {{ compared_value_type }} {{ compared_value }}.',
    'This value should be less than {{ compared_value }}.' => 'Kjo vlerë duhet të jetë më vogël se {{ compared_value }}.',
    'This value should be less than or equal to {{ compared_value }}.' => 'Kjo vlerë duhet të jetë më e vogël ose e barabartë me {{ compared_value }}.',
    'This value should not be equal to {{ compared_value }}.' => 'Kjo vlerë nuk duhet të jetë e barabartë me {{ compared_value }}.',
    'This value should not be identical to {{ compared_value_type }} {{ compared_value }}.' => 'Kjo vlerë nuk duhet të jetë identike me {{ compared_value_type }} {{ compared_value }}.',
    'The image ratio is too big ({{ ratio }}). Allowed maximum ratio is {{ max_ratio }}.' => 'Raporti i imazhit është shumë i madh ({{ ratio }}). Raporti maksimal i lejuar është {{ max_ratio }}.',
    'The image ratio is too small ({{ ratio }}). Minimum ratio expected is {{ min_ratio }}.' => 'Raporti i imazhit është shumë i vogël ({{ ratio }}). Raporti minimal pritet të jetë {{ min_ratio }}.',
    'The image is square ({{ width }}x{{ height }}px). Square images are not allowed.' => 'Imazhi është katror ({{ width }}x{{ height }}px). Imazhet katrore nuk janë të lejuara.',
    'The image is landscape oriented ({{ width }}x{{ height }}px). Landscape oriented images are not allowed.' => 'Imazhi është i orientuar horizontalisht ({{ width }}x{{ height }}px). Imazhet e orientuara horizontalisht nuk lejohen.',
    'The image is portrait oriented ({{ width }}x{{ height }}px). Portrait oriented images are not allowed.' => 'Imazhi është i orientuar vertikalisht ({{ width }}x{{ height }}px). Imazhet orientuara vertikalisht nuk lejohen.',
    'An empty file is not allowed.' => 'Një file i zbrazët nuk lejohet.',
    'The host could not be resolved.' => 'Host-i nuk mund te zbulohej.',
    'This value does not match the expected {{ charset }} charset.' => 'Kjo vlerë nuk përputhet me kodifikimin e karaktereve {{ charset }} që pritej.',
    'This is not a valid Business Identifier Code (BIC).' => 'Ky nuk është një Kod Identifikues i Biznesit (BIC) i vleflshem.',
    'Error' => 'Gabim',
    'This is not a valid UUID.' => 'Ky nuk është një UUID i vlefshëm.',
    'This value should be a multiple of {{ compared_value }}.' => 'Kjo vlerë duhet të jetë një shumëfish i {{ compared_value }}.',
    'This Business Identifier Code (BIC) is not associated with IBAN {{ iban }}.' => 'Ky Kod Identifikues i Biznesit (BIC) nuk është i lidhur me IBAN {{ iban }}.',
  ),
));

$catalogueFr = new MessageCatalogue('fr', array (
  'validators' => 
  array (
    'This form should not contain extra fields.' => 'Ce formulaire ne doit pas contenir des champs supplémentaires.',
    'The uploaded file was too large. Please try to upload a smaller file.' => 'Le fichier téléchargé est trop volumineux. Merci d\'essayer d\'envoyer un fichier plus petit.',
    'The CSRF token is invalid. Please try to resubmit the form.' => 'Le jeton CSRF est invalide. Veuillez renvoyer le formulaire.',
    'This value should be false.' => 'Cette valeur doit être fausse.',
    'This value should be true.' => 'Cette valeur doit être vraie.',
    'This value should be of type {{ type }}.' => 'Cette valeur doit être de type {{ type }}.',
    'This value should be blank.' => 'Cette valeur doit être vide.',
    'The value you selected is not a valid choice.' => 'Cette valeur doit être l\'un des choix proposés.',
    'You must select at least {{ limit }} choice.|You must select at least {{ limit }} choices.' => 'Vous devez sélectionner au moins {{ limit }} choix.|Vous devez sélectionner au moins {{ limit }} choix.',
    'You must select at most {{ limit }} choice.|You must select at most {{ limit }} choices.' => 'Vous devez sélectionner au maximum {{ limit }} choix.|Vous devez sélectionner au maximum {{ limit }} choix.',
    'One or more of the given values is invalid.' => 'Une ou plusieurs des valeurs soumises sont invalides.',
    'This field was not expected.' => 'Ce champ n\'a pas été prévu.',
    'This field is missing.' => 'Ce champ est manquant.',
    'This value is not a valid date.' => 'Cette valeur n\'est pas une date valide.',
    'This value is not a valid datetime.' => 'Cette valeur n\'est pas une date valide.',
    'This value is not a valid email address.' => 'Cette valeur n\'est pas une adresse email valide.',
    'The file could not be found.' => 'Le fichier n\'a pas été trouvé.',
    'The file is not readable.' => 'Le fichier n\'est pas lisible.',
    'The file is too large ({{ size }} {{ suffix }}). Allowed maximum size is {{ limit }} {{ suffix }}.' => 'Le fichier est trop volumineux ({{ size }} {{ suffix }}). Sa taille ne doit pas dépasser {{ limit }} {{ suffix }}.',
    'The mime type of the file is invalid ({{ type }}). Allowed mime types are {{ types }}.' => 'Le type du fichier est invalide ({{ type }}). Les types autorisés sont {{ types }}.',
    'This value should be {{ limit }} or less.' => 'Cette valeur doit être inférieure ou égale à {{ limit }}.',
    'This value is too long. It should have {{ limit }} character or less.|This value is too long. It should have {{ limit }} characters or less.' => 'Cette chaîne est trop longue. Elle doit avoir au maximum {{ limit }} caractère.|Cette chaîne est trop longue. Elle doit avoir au maximum {{ limit }} caractères.',
    'This value should be {{ limit }} or more.' => 'Cette valeur doit être supérieure ou égale à {{ limit }}.',
    'This value is too short. It should have {{ limit }} character or more.|This value is too short. It should have {{ limit }} characters or more.' => 'Cette chaîne est trop courte. Elle doit avoir au minimum {{ limit }} caractère.|Cette chaîne est trop courte. Elle doit avoir au minimum {{ limit }} caractères.',
    'This value should not be blank.' => 'Cette valeur ne doit pas être vide.',
    'This value should not be null.' => 'Cette valeur ne doit pas être nulle.',
    'This value should be null.' => 'Cette valeur doit être nulle.',
    'This value is not valid.' => 'Cette valeur n\'est pas valide.',
    'This value is not a valid time.' => 'Cette valeur n\'est pas une heure valide.',
    'This value is not a valid URL.' => 'Cette valeur n\'est pas une URL valide.',
    'The two values should be equal.' => 'Les deux valeurs doivent être identiques.',
    'The file is too large. Allowed maximum size is {{ limit }} {{ suffix }}.' => 'Le fichier est trop volumineux. Sa taille ne doit pas dépasser {{ limit }} {{ suffix }}.',
    'The file is too large.' => 'Le fichier est trop volumineux.',
    'The file could not be uploaded.' => 'Le téléchargement de ce fichier est impossible.',
    'This value should be a valid number.' => 'Cette valeur doit être un nombre.',
    'This file is not a valid image.' => 'Ce fichier n\'est pas une image valide.',
    'This is not a valid IP address.' => 'Cette adresse IP n\'est pas valide.',
    'This value is not a valid language.' => 'Cette langue n\'est pas valide.',
    'This value is not a valid locale.' => 'Ce paramètre régional n\'est pas valide.',
    'This value is not a valid country.' => 'Ce pays n\'est pas valide.',
    'This value is already used.' => 'Cette valeur est déjà utilisée.',
    'The size of the image could not be detected.' => 'La taille de l\'image n\'a pas pu être détectée.',
    'The image width is too big ({{ width }}px). Allowed maximum width is {{ max_width }}px.' => 'La largeur de l\'image est trop grande ({{ width }}px). La largeur maximale autorisée est de {{ max_width }}px.',
    'The image width is too small ({{ width }}px). Minimum width expected is {{ min_width }}px.' => 'La largeur de l\'image est trop petite ({{ width }}px). La largeur minimale attendue est de {{ min_width }}px.',
    'The image height is too big ({{ height }}px). Allowed maximum height is {{ max_height }}px.' => 'La hauteur de l\'image est trop grande ({{ height }}px). La hauteur maximale autorisée est de {{ max_height }}px.',
    'The image height is too small ({{ height }}px). Minimum height expected is {{ min_height }}px.' => 'La hauteur de l\'image est trop petite ({{ height }}px). La hauteur minimale attendue est de {{ min_height }}px.',
    'This value should be the user\'s current password.' => 'Cette valeur doit être le mot de passe actuel de l\'utilisateur.',
    'This value should have exactly {{ limit }} character.|This value should have exactly {{ limit }} characters.' => 'Cette chaîne doit avoir exactement {{ limit }} caractère.|Cette chaîne doit avoir exactement {{ limit }} caractères.',
    'The file was only partially uploaded.' => 'Le fichier a été partiellement transféré.',
    'No file was uploaded.' => 'Aucun fichier n\'a été transféré.',
    'No temporary folder was configured in php.ini.' => 'Aucun répertoire temporaire n\'a été configuré dans le php.ini.',
    'Cannot write temporary file to disk.' => 'Impossible d\'écrire le fichier temporaire sur le disque.',
    'A PHP extension caused the upload to fail.' => 'Une extension PHP a empêché le transfert du fichier.',
    'This collection should contain {{ limit }} element or more.|This collection should contain {{ limit }} elements or more.' => 'Cette collection doit contenir {{ limit }} élément ou plus.|Cette collection doit contenir {{ limit }} éléments ou plus.',
    'This collection should contain {{ limit }} element or less.|This collection should contain {{ limit }} elements or less.' => 'Cette collection doit contenir {{ limit }} élément ou moins.|Cette collection doit contenir {{ limit }} éléments ou moins.',
    'This collection should contain exactly {{ limit }} element.|This collection should contain exactly {{ limit }} elements.' => 'Cette collection doit contenir exactement {{ limit }} élément.|Cette collection doit contenir exactement {{ limit }} éléments.',
    'Invalid card number.' => 'Numéro de carte invalide.',
    'Unsupported card type or invalid card number.' => 'Type de carte non supporté ou numéro invalide.',
    'This is not a valid International Bank Account Number (IBAN).' => 'Le numéro IBAN (International Bank Account Number) saisi n\'est pas valide.',
    'This value is not a valid ISBN-10.' => 'Cette valeur n\'est pas un code ISBN-10 valide.',
    'This value is not a valid ISBN-13.' => 'Cette valeur n\'est pas un code ISBN-13 valide.',
    'This value is neither a valid ISBN-10 nor a valid ISBN-13.' => 'Cette valeur n\'est ni un code ISBN-10, ni un code ISBN-13 valide.',
    'This value is not a valid ISSN.' => 'Cette valeur n\'est pas un code ISSN valide.',
    'This value is not a valid currency.' => 'Cette valeur n\'est pas une devise valide.',
    'This value should be equal to {{ compared_value }}.' => 'Cette valeur doit être égale à {{ compared_value }}.',
    'This value should be greater than {{ compared_value }}.' => 'Cette valeur doit être supérieure à {{ compared_value }}.',
    'This value should be greater than or equal to {{ compared_value }}.' => 'Cette valeur doit être supérieure ou égale à {{ compared_value }}.',
    'This value should be identical to {{ compared_value_type }} {{ compared_value }}.' => 'Cette valeur doit être identique à {{ compared_value_type }} {{ compared_value }}.',
    'This value should be less than {{ compared_value }}.' => 'Cette valeur doit être inférieure à {{ compared_value }}.',
    'This value should be less than or equal to {{ compared_value }}.' => 'Cette valeur doit être inférieure ou égale à {{ compared_value }}.',
    'This value should not be equal to {{ compared_value }}.' => 'Cette valeur ne doit pas être égale à {{ compared_value }}.',
    'This value should not be identical to {{ compared_value_type }} {{ compared_value }}.' => 'Cette valeur ne doit pas être identique à {{ compared_value_type }} {{ compared_value }}.',
    'The image ratio is too big ({{ ratio }}). Allowed maximum ratio is {{ max_ratio }}.' => 'Le rapport largeur/hauteur de l\'image est trop grand ({{ ratio }}). Le rapport maximal autorisé est {{ max_ratio }}.',
    'The image ratio is too small ({{ ratio }}). Minimum ratio expected is {{ min_ratio }}.' => 'Le rapport largeur/hauteur de l\'image est trop petit ({{ ratio }}). Le rapport minimal attendu est {{ min_ratio }}.',
    'The image is square ({{ width }}x{{ height }}px). Square images are not allowed.' => 'L\'image est carrée ({{ width }}x{{ height }}px). Les images carrées ne sont pas autorisées.',
    'The image is landscape oriented ({{ width }}x{{ height }}px). Landscape oriented images are not allowed.' => 'L\'image est au format paysage ({{ width }}x{{ height }}px). Les images au format paysage ne sont pas autorisées.',
    'The image is portrait oriented ({{ width }}x{{ height }}px). Portrait oriented images are not allowed.' => 'L\'image est au format portrait ({{ width }}x{{ height }}px). Les images au format portrait ne sont pas autorisées.',
    'An empty file is not allowed.' => 'Un fichier vide n\'est pas autorisé.',
    'The host could not be resolved.' => 'Le nom de domaine n\'a pas pu être résolu.',
    'This value does not match the expected {{ charset }} charset.' => 'Cette valeur ne correspond pas au jeu de caractères {{ charset }} attendu.',
    'This is not a valid Business Identifier Code (BIC).' => 'Ce n\'est pas un code universel d\'identification des banques (BIC) valide.',
    'Error' => 'Erreur',
    'This is not a valid UUID.' => 'Ceci n\'est pas un UUID valide.',
    'This value should be a multiple of {{ compared_value }}.' => 'Cette valeur doit être un multiple de {{ compared_value }}.',
    'This Business Identifier Code (BIC) is not associated with IBAN {{ iban }}.' => 'Ce code d\'identification d\'entreprise (BIC) n\'est pas associé à l\'IBAN {{ iban }}.',
    'This value should be valid JSON.' => 'Cette valeur doit être un JSON valide.',
    'This collection should contain only unique elements.' => 'Cette collection ne doit pas comporter de doublons.',
    'This value should be positive.' => 'Cette valeur doit être strictement positive.',
    'This value should be either positive or zero.' => 'Cette valeur doit être supérieure ou égale à zéro.',
    'This value should be negative.' => 'Cette valeur doit être strictement négative.',
    'This value should be either negative or zero.' => 'Cette valeur doit être inférieure ou égale à zéro.',
    'This value is not a valid timezone.' => 'Cette valeur n\'est pas un fuseau horaire valide.',
    'This password has been leaked in a data breach, it must not be used. Please use another password.' => 'Ce mot de passe a été divulgué lors d\'une fuite de données, il ne doit plus être utilisé. Veuillez utiliser un autre mot de passe.',
    'This value should be between {{ min }} and {{ max }}.' => 'Cette valeur doit être comprise entre {{ min }} et {{ max }}.',
  ),
  'security' => 
  array (
    'An authentication exception occurred.' => 'Une exception d\'authentification s\'est produite.',
    'Authentication credentials could not be found.' => 'Les identifiants d\'authentification n\'ont pas pu être trouvés.',
    'Authentication request could not be processed due to a system problem.' => 'La requête d\'authentification n\'a pas pu être executée à cause d\'un problème système.',
    'Invalid credentials.' => 'Identifiants invalides.',
    'Cookie has already been used by someone else.' => 'Le cookie a déjà été utilisé par quelqu\'un d\'autre.',
    'Not privileged to request the resource.' => 'Privilèges insuffisants pour accéder à la ressource.',
    'Invalid CSRF token.' => 'Jeton CSRF invalide.',
    'No authentication provider found to support the authentication token.' => 'Aucun fournisseur d\'authentification n\'a été trouvé pour supporter le jeton d\'authentification.',
    'No session available, it either timed out or cookies are not enabled.' => 'Aucune session disponible, celle-ci a expiré ou les cookies ne sont pas activés.',
    'No token could be found.' => 'Aucun jeton n\'a pu être trouvé.',
    'Username could not be found.' => 'Le nom d\'utilisateur n\'a pas pu être trouvé.',
    'Account has expired.' => 'Le compte a expiré.',
    'Credentials have expired.' => 'Les identifiants ont expiré.',
    'Account is disabled.' => 'Le compte est désactivé.',
    'Account is locked.' => 'Le compte est bloqué.',
  ),
  'pagerfanta' => 
  array (
    'previous' => 'Précédent',
    'next' => 'Suivant',
  ),
));
$catalogue->addFallbackCatalogue($catalogueFr);

return $catalogue;
