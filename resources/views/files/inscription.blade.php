<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">    
    <title></title>
    <style>
        .wrapper{
            width: 100vw;
        }
        .wrapper-box{
            margin: auto;
            max-width: 998px;
        }
        .header{

        }
        .header-left{}
        .header-center{}
        .header-right{}

        .row-file-2{
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            grid-column-gap: 1rem;
            place-items: center;
            margin: 1rem 0;
        }
        .row-file-3{
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            grid-column-gap: 1rem;
            place-items: center;
            margin: 1rem 0;
        }
        .form-file{
            display: flex;
            flex-direction: column;
            width: 100%;
        }
        .form-file label{
            font-weight: bold;
            margin-bottom: 8px;
        }
        .form-file input{
            padding: .5rem 0;         
            /* width: 100% */
            font-size: 1.2rem;
        }
    </style>
</head>
<body>
    <div class="wrapper">
        <div class="wrapper-box">
            <div class="header">
                <div class="herader-left"></div>
                <div class="header-center"></div>
                <div class="header-right"></div>
            </div>
            <div class="header-title"></div>
        
            <div class="body">
                <form action="">
        
                    <div class="row-file-2">
                        <div class="form-file">
                            <label for="name">NOM</label>
                            <input type="text" name="name">
                        </div>
                        <div class="form-file">
                            <label for="name">Prénom</label>
                            <input type="text" name="last_name">
                        </div>
                    </div>
        
                    <div class="row-file-3">
                        <div class="form-file">
                            <label for="name">Date de naissance</label>
                            <input type="birth_date" name="birth_date">
                        </div>
                        <div class="form-file">
                            <label for="birth_place">Lieu de naissance</label>
                            <input type="text" name="birth_place">
                        </div>
                        <div class="form-file">
                            <label for="nationality">Nationalité</label>
                            <input type="text" name="nationality">
                        </div>
                    </div>
        
                    <div class="form-file">
                        <label for="address">Adresse</label>
                        <input type="text" name="address">
                    </div>
        
                    <div class="row-file-2">
                        <div class="form-file">
                            <label for="postcode">Code Postal</label>
                            <input type="text" name="postcode">
                        </div>
                        <div class="form-file">
                            <label for="city">Ville</label>
                            <input type="text" name="city">
                        </div>
                    </div>
        
                    <div class="row-file-3">
                        <div class="form-file">
                            <label for="gsm">Tél Perso</label>
                            <input type="text" name="gsm">
                        </div>
                        <div class="form-file">
                            <label for="phone">Tél fixe</label>
                            <input type="text" name="phone">
                        </div>
                        <div class="form-file">
                            <label for="phone_pro">Tél Pro</label>
                            <input type="text" name="phone_pro">
                        </div>
                    </div>
        
                    <div class="row-file-2">
                        <div class="form-file">
                            <label for="postcode">Adresse Email</label>
                            <input type="email" name="email">
                        </div>
                        <div class="form-file">
                            <label for="city">Numéro de sécurité social</label>
                            <input type="text" name="sc">
                        </div>
                    </div>
        
        
                </form>
            </div>        
        </div>
    </div>
</body>
</html>
