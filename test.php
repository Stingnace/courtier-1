<!DOCTYPE html>
<html>

<head>
    <title>Assistant SEO</title>
</head>

<body>
    <h1>Assistant SEO</h1>
    <form>
        <label for="articleText">Texte de l'article :</label><br>
        <textarea id="articleText" rows="10" cols="50"></textarea><br>
        <button type="button" onclick="onAnalyzeButtonClick()">Analyser</button>
    </form>
    <h2>Conseils SEO :</h2>
    <ul id="tipsList"></ul>

    <style>
        /* Style de base de la page */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        /* Style du formulaire et du bouton d'analyse */
        form {
            display: flex;
            flex-direction: column;
            align-items: flex-start;
            margin: 10px;
        }

        textarea {
            margin: 5px 0;
        }

        button {
            padding: 5px 10px;
            font-size: 16px;
            border: none;
            border-radius: 5px;
            background-color: #333;
            color: #fff;
            cursor: pointer;
        }

        button:hover {
            background-color: #444;
        }

        /* Style de la liste de conseils */
        ul {
            list-style: none;
            margin: 10px;
            padding: 0;
        }

        li {
            margin: 5px 0;
            font-size: 16px;
        }
    </style>

    <script>
        const SEOAssistant = {
            // Un tableau de mots-clés à utiliser dans l'article
            keywords: ['SEO', 'optimisation', 'référencement', 'Google'],

            // Un objet qui contient des conseils SEO à utiliser lors de la rédaction de l'article
            tips: {
                useKeywordsInFirstParagraph: 'Utilisez vos mots-clés dans le premier paragraphe',
                useKeywordsInSubheaders: 'Utilisez vos mots-clés dans les sous-titres',
                useKeywordsInImageAltTags: 'Utilisez vos mots-clés dans les balises alt des images',
                useKeywordsInMetaDescription: 'Utilisez vos mots-clés dans la meta description'
            },

            // Une fonction qui recommande des conseils SEO à utiliser dans l'article en fonction du texte passé en entrée
            suggestTips: function(articleText) {
                let suggestedTips = [];

                // Vérifie si les mots-clés apparaissent dans le premier paragraphe
                if (!articleText.startsWith(this.keywords.join(' '))) {
                    // Vérifie si les mots-clés apparaissent dans le premier paragraphe
                    if (!articleText.startsWith(this.keywords.join(' '))) {
                        suggestedTips.push(this.tips.useKeywordsInFirstParagraph);
                    }

                    // Vérifie si les mots-clés apparaissent dans les sous-titres
                    if (!articleText.match(/<h[2-6]>.*(keyword).*<\/h[2-6]>/)) {
                        suggestedTips.push(this.tips.useKeywordsInSubheaders);
                    }

                    // Vérifie si les mots-clés apparaissent dans les balises alt des images
                    if (!articleText.match(/<img.*alt=".*(keyword).*".*>/)) {
                        suggestedTips.push(this.tips.useKeywordsInImageAltTags);
                    }

                    // Vérifie si les mots-clés apparaissent dans la meta description
                    if (!articleText.match(/<meta.*name="description".*content=".*(keyword).*".*>/)) {
                        suggestedTips.push(this.tips.useKeywordsInMetaDescription);
                    }

                    return suggestedTips;
                }
            }
        }
        // Fonction appelée lorsque le bouton "Analyser" est cliqué
        function onAnalyzeButtonClick() {
            // Récupère le texte de l'article
            const articleText = document.getElementById('articleText').value;

            // Demande à l'assistant SEO de suggérer des conseils
            const suggestedTips = SEOAssistant.suggestTips(articleText);

            // Affiche les conseils dans la liste
            displayTips(suggestedTips);
        }

        // Affiche les conseils dans la liste
        function displayTips(tips) {
            const tipsList = document.getElementById('tipsList');
            tipsList.innerHTML = ''; // Vide la liste

            for (const tip of tips) {
                const li = document.createElement('li');
                li.textContent = tip;
                tipsList.appendChild(li);
            }
        }
    </script>
</body>

</html>