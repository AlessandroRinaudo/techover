<?php

use Symfony\Component\Translation\MessageCatalogue;

$catalogue = new MessageCatalogue('tl', array (
  'validators' => 
  array (
    'This value should be false.' => 'Ang halaga nito ay dapat na huwad.',
    'This value should be true.' => 'Ang halaga nito ay dapat totoo.',
    'This value should be of type {{ type }}.' => 'Ang halaga nito ay dapat sa uri {{ type }}.',
    'This value should be blank.' => 'Ang halaga nito ay dapat walang laman.',
    'The value you selected is not a valid choice.' => 'Ang halaga ng iyong pinili ay hindi balidong pagpili.',
    'You must select at least {{ limit }} choice.|You must select at least {{ limit }} choices.' => 'Kailangan mong pumili ng pinakamababang {{ limit }} ng pagpilian.|Kailangan mong pumili ng pinakamababang {{ limit }} ng mga pagpipilian.',
    'You must select at most {{ limit }} choice.|You must select at most {{ limit }} choices.' => 'Kailangan mong pumili ng pinakamataas {{ limit }} ng pagpipilian.|Kailangan mong pumili ng pinakamataas {{ limit }} ng mga pagpipilian.',
    'One or more of the given values is invalid.' => 'Isa o higit pang mga halaga na binigay ay hindi balido.',
    'This field was not expected.' => 'Ang larangang ito ay hindi inaasahan.',
    'This field is missing.' => 'Ang patlang na ito ay nawawala.',
    'This value is not a valid date.' => 'Ang halagang ito ay hindi balidong petsa.',
    'This value is not a valid datetime.' => 'Ang halagang ito ay hindi wastong petsa/oras.',
    'This value is not a valid email address.' => 'Ang halagang ito ay hindi balidong address ng email.',
    'The file could not be found.' => 'Ang file na ito ay hindi makita.',
    'The file is not readable.' => 'Ang file na ito ay hindi mabasa.',
    'The file is too large ({{ size }} {{ suffix }}). Allowed maximum size is {{ limit }} {{ suffix }}.' => 'Ang file na ito ay masyadong malaki ({{ size }} {{ suffix }}). Ang pinakamalaking sukat {{ limit }} {{ suffix }}.',
    'The mime type of the file is invalid ({{ type }}). Allowed mime types are {{ types }}.' => 'Ang uri ng file ng mime ay hindi balido ({{ type }}).Ang mga pinapayagang uri ng mime ay ang  {{ types }}.',
    'This value should be {{ limit }} or less.' => 'Ang halaga nito ay dapat na {{ limit }} or maliit pa.',
    'This value is too long. It should have {{ limit }} character or less.|This value is too long. It should have {{ limit }} characters or less.' => 'Ang halaga nito ay masyadong mahaba.Ito ay dapat na {{ limit }} karakter o maliit pa.|Ang halaga nito ay masyadong mahaba. Ito ay dapat na {{ limit }} mga karakter o maliit pa.',
    'This value should be {{ limit }} or more.' => 'Ang halaga nito ay dapat na {{ limit }} o mas marami pa.',
    'This value is too short. It should have {{ limit }} character or more.|This value is too short. It should have {{ limit }} characters or more.' => 'Ang halaga nito ay masyadong maliit. Ito ay dapat na {{ limit }} karakter o marami pa.|Ang halaga nito ay masyadong maliit. Ito ay dapat na {{ limit }} mga karakter o marami pa.',
    'This value should not be blank.' => 'Ang halaga na ito ay dapat na may laman.',
    'This value should not be null.' => 'Meron dapt itong halaga.',
    'This value should be null.' => 'Wala dapat itong halaga.',
    'This value is not valid.' => 'Hindi balido ang halagang ito.',
    'This value is not a valid time.' => 'Ang halagang ito ay hindi wastong oras.',
    'This value is not a valid URL.' => 'Hindi ito isang balidong URL.',
    'The two values should be equal.' => 'Ang dalwang halaga ay dapat magkapareha.',
    'The file is too large. Allowed maximum size is {{ limit }} {{ suffix }}.' => 'Ang file ay masyadong malaki. Ang pinapayagan halaga lamang ay {{ limit}} {{ suffix }}.',
    'The file is too large.' => 'Ang file na ito ay masyadong malaki.',
    'The file could not be uploaded.' => 'Ang file na ito ay hindi ma-upload.',
    'This value should be a valid number.' => 'Ang halaga nito ay dapat na wastong numero.',
    'This file is not a valid image.' => 'Ang file na ito ay hindi wastong imahe.',
    'This is not a valid IP address.' => 'Ito ay hindi wastong IP address.',
    'This value is not a valid language.' => 'Ang halaga na ito ay hindi balidong wika.',
    'This value is not a valid locale.' => 'Ito ay isang hindi wastong locale na halaga.',
    'This value is not a valid country.' => 'ng halaga na ito ay hindi wastong bansa.',
    'This value is already used.' => 'Ang halaga na ito ay ginamit na.',
    'The size of the image could not be detected.' => 'Ang sukat ng imahe ay hindi madetect.',
    'The image width is too big ({{ width }}px). Allowed maximum width is {{ max_width }}px.' => 'Ang lapad ng imahe ay masyadong malaki ({{ width }}px). Ang pinapayagang lapay ay {{ max_width }}px.',
    'The image width is too small ({{ width }}px). Minimum width expected is {{ min_width }}px.' => 'Ang lapad ng imahe ay masyadong maliit ({{ width }}px). Ang pinakamaliit na pinapayagang lapad ay {{ min_width }}px.',
    'The image height is too big ({{ height }}px). Allowed maximum height is {{ max_height }}px.' => 'Ang haba ng imahe ay masyadong mataas ({{ height }}px). Ang pinakmataas na haba ay {{ max_height }}px.',
    'The image height is too small ({{ height }}px). Minimum height expected is {{ min_height }}px.' => 'Ang haba ng imahe ay masyadong maliit ({{ height }}px). Ang inaasahang haba ay {{ min_height }}px.',
    'This value should be the user\'s current password.' => 'Ang halagang ito ay dapat na password ng kasalukuyang gumagamit.',
    'This value should have exactly {{ limit }} character.|This value should have exactly {{ limit }} characters.' => 'Ang halagang ito ay dapat na eksakto sa {{ limit}} karakter.|Ang halagang ito ay dapat na eksakto sa {{ limit }} mga karakter.',
    'The file was only partially uploaded.' => 'Ang file na ito ay kahalating na upload lamang.',
    'No file was uploaded.' => 'Walang na upload na file.',
    'No temporary folder was configured in php.ini.' => 'Walang temporaryong folder ang naayos sa php.ini.',
    'Cannot write temporary file to disk.' => 'Temporaryong hindi  makasulat ng file sa disk.',
    'A PHP extension caused the upload to fail.' => 'Ang dahilan ng pagkabigo ng pagupload ng files ay isang extension ng PHP.',
    'This collection should contain {{ limit }} element or more.|This collection should contain {{ limit }} elements or more.' => 'Ang koleksyon na ito ay dapat magkaroon ng {{ limit }} elemento o marami pa.|Ang koleksyon na ito ay dapat magkaroon ng {{ limit }} mga elemento o marami pa.',
    'This collection should contain {{ limit }} element or less.|This collection should contain {{ limit }} elements or less.' => 'Ang koleksyon na ito ay dapat magkaroon ng {{ limit }} elemento o maliit pa.|Ang koleksyon na ito ay dapat magkaroon ng {{ limit }} mga elemento o maliit pa.',
    'This collection should contain exactly {{ limit }} element.|This collection should contain exactly {{ limit }} elements.' => 'Ang koleksyong ito ay magkaroon ng eksaktong {{ limit }} elemento.|Ang koleksyong ito ay magkaroon ng eksaktong {{ limit }} mga elemento.',
    'Invalid card number.' => 'Hindi wastong numero ng kard.',
    'Unsupported card type or invalid card number.' => 'Hindi supportadong uri ng kard o hindi wastong numero ng kard.',
    'This is not a valid International Bank Account Number (IBAN).' => 'Ito ay hindi isang balidong International Bank Account Number (IBAN).',
    'This value is not a valid ISBN-10.' => 'Ang halagang ito ay hindi balidong SBN-10.',
    'This value is not a valid ISBN-13.' => 'Ang halagang ito ay hindi balidong ISBN-13.',
    'This value is neither a valid ISBN-10 nor a valid ISBN-13.' => 'Ang halagang ito ay pwdeng isang balidong ISBN-10 o isang balidong ISBN-13.',
    'This value is not a valid ISSN.' => 'Ang halangang ito ay hindi isang balidong ISSN.',
    'This value is not a valid currency.' => 'Ang halagang ito ay hindi balidong pera.',
    'This value should be equal to {{ compared_value }}.' => 'Ito ay hindi dapat magkapareho sa {{ compared_value }}.',
    'This value should be greater than {{ compared_value }}.' => 'Ang halagang ito ay dapat tataas sa {{ compared_value }}.',
    'This value should be greater than or equal to {{ compared_value }}.' => 'Ang halagang ito ay dapat mas mataas o magkapareha sa {{ compared_value }}.',
    'This value should be identical to {{ compared_value_type }} {{ compared_value }}.' => 'Ang halagang ito ay dapat kapareha ng {{ compared_value_type }} {{ compared_value }}.',
    'This value should be less than {{ compared_value }}.' => 'Ang halagang ito ay dapat mas maliit sa {{ compared_value }}.',
    'This value should be less than or equal to {{ compared_value }}.' => 'Ang halagang ito ay dapat mas mmaliit o magkapareha sa {{ compared_value }}.',
    'This value should not be equal to {{ compared_value }}.' => 'Ang halagang ito ay hindi dapat magkapareha sa {{ compared_value }}.',
    'This value should not be identical to {{ compared_value_type }} {{ compared_value }}.' => 'Ang halagang ito ay hindi dapat magkapareha sa {{ compared_value_type }} {{ compared_value }}.',
    'The image ratio is too big ({{ ratio }}). Allowed maximum ratio is {{ max_ratio }}.' => 'Ang ratio ng imahe ay masyadong malaki ({{ ratio }}). Ang pinakamalaking ratio ay {{ max_ratio }}.',
    'The image ratio is too small ({{ ratio }}). Minimum ratio expected is {{ min_ratio }}.' => 'ng ratio ng imahe ay masyadong maliit ({{ ratio }}). Ang pinamaliit na ratio ay {{ min_ratio }}.',
    'The image is square ({{ width }}x{{ height }}px). Square images are not allowed.' => 'Ang imahe ay kwadrado ({{ width }}x{{ height }}px). Ang mga kwadradong imahe ay hindi pwede.',
    'The image is landscape oriented ({{ width }}x{{ height }}px). Landscape oriented images are not allowed.' => 'Ang orientasyon ng imahe ay nakalandscape ({{ width }}x{{ height }}px). Ang mga imaheng nakalandscape ang orientasyon ay hindi pwede.',
    'The image is portrait oriented ({{ width }}x{{ height }}px). Portrait oriented images are not allowed.' => 'Ang orientasyon ng imahe ay nakaportrait ({{ width }}x{{ height }}px). PAng mga imaheng nakaportrait ang orientasyon ay hindi pwede.',
    'An empty file is not allowed.' => 'Ang file na walang laman ay hindi pwede.',
    'The host could not be resolved.' => 'Hindi maresolba ang host.',
    'This value does not match the expected {{ charset }} charset.' => 'Ang halaga ay hindi kapareha sa inaasahang {{ charset }} set ng karater.',
    'This is not a valid Business Identifier Code (BIC).' => 'Ito ay hindi isang balidong Business Identifier Code (BIC).',
    'Error' => 'Error',
    'This is not a valid UUID.' => 'Ito ay hindi wastong UUID.',
    'This value should be a multiple of {{ compared_value }}.' => 'Ang halagang ito ay dapat multiple ng {{ compared_value }}.',
    'This Business Identifier Code (BIC) is not associated with IBAN {{ iban }}.' => 'Ang Business Identifier Code (BIC) na ito ay walang kaugnayan sa IBAN {{ iban }}.',
    'This value should be valid JSON.' => 'Ang halagang ito ay dapat naka wastong JSON.',
    'This collection should contain only unique elements.' => 'Ang mga elemento ng koleksyong ito ay dapat magkakaiba.',
    'This value should be positive.' => 'Ang halagang ito ay dapat positibo.',
    'This value should be either positive or zero.' => 'Ang halagang ito ay dapat positibo o zero.',
    'This value should be negative.' => 'Ang halagang ito ay dapat negatibo.',
    'This value should be either negative or zero.' => 'Ang halagang ito ay dapat negatibo o zero.',
    'This value is not a valid timezone.' => 'Ang halagang ito ay hindi wastong timezone.',
    'This password has been leaked in a data breach, it must not be used. Please use another password.' => 'Naikalat ang password na ito sa isang data breach at hindi na dapat gamitin. Mangyaring gumamit ng ibang pang password.',
    'This form should not contain extra fields.' => 'Ang pormang itong ay hindi dapat magkarron ng dagdag na mga patlang.',
    'The uploaded file was too large. Please try to upload a smaller file.' => 'Ang ini-upload na file ay masyadong malaki. Pakiulit muling mag-upload ng mas maliit na file.',
    'The CSRF token is invalid. Please try to resubmit the form.' => 'Hindi balido ang CSRF token. Maagpasa muli ng isang pang porma.',
  ),
  'security' => 
  array (
    'An authentication exception occurred.' => 'Isang pambihirang pagpaptunay ang nangyari.',
    'Authentication credentials could not be found.' => 'Hindi mahanap ang mga kinakailangan na dokumento para sa pagpapatunay.',
    'Authentication request could not be processed due to a system problem.' => 'Hindi maproseso ang iyong hiling dahil may problema sa sistema.',
    'Invalid credentials.' => 'Hindi balidong mga dokumento.',
    'Cookie has already been used by someone else.' => 'Ang Cookie ay ginamit na ng ibang tao.',
    'Not privileged to request the resource.' => 'Walang pribilehiyo upang humingi ng mga bagong mapagkukunan.',
    'Invalid CSRF token.' => 'Hindi balidong mga token ng CSRF.',
    'No authentication provider found to support the authentication token.' => 'Walang nakitang nagbibibagay ng suporta sa token ng pagpapatunay.',
    'No session available, it either timed out or cookies are not enabled.' => 'Walang sesyon ng magagamit, ito ay nawalan ng oras o hindi pinagana.',
    'No token could be found.' => 'Walang token na nahanap.',
    'Username could not be found.' => 'Walang username na makita.',
    'Account has expired.' => 'Ang akawnt ay nag-expire na.',
    'Credentials have expired.' => '.ng mga kinakailangang dokumento ay nag expire na.',
    'Account is disabled.' => 'Ang akawnt ay hindi pinagana.',
    'Account is locked.' => 'ng akawnt ay nakasara.',
  ),
));

$catalogueFr = new MessageCatalogue('fr', array (
  'validators' => 
  array (
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
    'This value is not a valid hostname.' => 'Cette valeur n\'est pas un nom d\'hôte valide.',
    'The number of elements in this collection should be a multiple of {{ compared_value }}.' => 'Le nombre d\'éléments de cette collection doit être un multiple de {{ compared_value }}.',
    'This value should satisfy at least one of the following constraints:' => 'Cette valeur doit satisfaire à au moins une des contraintes suivantes :',
    'Each element of this collection should satisfy its own set of constraints.' => 'Chaque élément de cette collection doit satisfaire à son propre jeu de contraintes.',
    'This form should not contain extra fields.' => 'Ce formulaire ne doit pas contenir des champs supplémentaires.',
    'The uploaded file was too large. Please try to upload a smaller file.' => 'Le fichier téléchargé est trop volumineux. Merci d\'essayer d\'envoyer un fichier plus petit.',
    'The CSRF token is invalid. Please try to resubmit the form.' => 'Le jeton CSRF est invalide. Veuillez renvoyer le formulaire.',
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
  'KnpPaginatorBundle' => 
  array (
    'label_previous' => 'Précédent',
    'label_next' => 'Suivant',
    'filter_searchword' => 'Recherche...',
    'Next' => 'suivant',
    'Previous' => 'précedent',
  ),
));
$catalogue->addFallbackCatalogue($catalogueFr);

return $catalogue;
