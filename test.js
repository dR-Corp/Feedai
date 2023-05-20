async function send_request(prompt) {
    const apiResponse = await fetch('https://api.openai.com/v1/engines/text-davinci-003/completions', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',
            'Authorization': 'Bearer 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'       
        },
        body: JSON.stringify({
            prompt: prompt,
            max_tokens: 1024,
            temperature: 0.5
        })
    });

    const jsonResponse = await apiResponse.json();
    response = jsonResponse.choices[0].text.trim().replace(/(\r\n|\n|\r)/gm, "")
    return JSON.parse(response)
}

async function fetchSequentially(prompts) {
    let results = [];
    for (const prompt of prompts) {
      const data = await send_request(prompt)
      console.log(data);
      results.push(data);
    }
    return results;
}

const projet = {
    "id": 2,
    "user_id": 1,
    "nom": "BREST",
    "type_id": 1,
    "type": "Boutique Ecom",
    "details": "{\"id_niche\":\"2\",\"niche\":\"Beaut\\u00e9 et soins personnels\",\"sous_categorie_niche\":\"Cosm\\u00e9tiques naturels et biologiques\",\"personae\":{\"positionnement\":\"Site de vente classique\",\"personnalite\":{\"traits_caractere\":\"M\\u00e9ticuleux(se)\",\"interets_personnels\":\"Maquillage \",\"qualite\":\"Pers\\u00e9v\\u00e9rant(e)\",\"defaut\":\"Impatience\",\"passion\":\"Les tendances de beaut\\u00e9\",\"peur\":\"La peur de l'\\u00e9chec\"}},\"produit\":{\"type\":\"mono\",\"concept\":\"AA CONCEPT\",\"liste\":[{\"nom\":\"AA\",\"description\":\"AA\"}],\"cibles\":{\"canaux_achat\":\"Boutique en ligne\",\"frequence_achat\":\"Tous les mois\",\"montant_moyen\":\"50-100 \\u20ac\",\"tranche_age\":\"10-25ans\",\"genre\":\"F\\u00e9minin\"}}}",
    "progression": null,
    "etat": null,
    "created_at": "2023-04-30 09:44:12",
    "updated_at": "2023-04-30 09:44:12"
}

const prompts = [
    `Voici les informations suivantes sur un projet e-commerce : ${JSON.stringify(projet)}.
        En les utilisants génère moi des suggestions de besoins principaux satisfaits par le ou les produit mise en jeu dans ce projet e-commerce ! !
        Veuillez renvoyer le résultat sous forme d'un objet JSON contenant les quatre catégories de résultats, avec une structure similaire à celle-ci : 
        [{"id": 1, "besoin": ""}, ...]
        Assurez-vous que le résultat peut être analysé par JSON.parse() sans erreur.`,
    `Voici les informations suivantes sur un projet e-commerce : ${JSON.stringify(projet)}.
        En les utilisants génère moi des suggestions de motivations pour utiliser le ou les produit mise en jeu dans ce projet e-commerce !
        Veuillez renvoyer le résultat sous forme d'un objet JSON contenant les quatre catégories de résultats, avec une structure similaire à celle-ci : 
        [{"id": 1, "motivation": ""}, ...],
        Assurez-vous que le résultat peut être analysé par JSON.parse() sans erreur.`,
    `Voici les informations suivantes sur un projet e-commerce : ${JSON.stringify(projet)}.
        En les utilisants génère moi des suggestions de positionnements devrant permettre l\'atteinte des objectifs de ce projet !
        Veuillez renvoyer le résultat sous forme d'un objet JSON contenant les quatre catégories de résultats, avec une structure similaire à celle-ci :
        [{"id": 1, "positionnement": ""}, ...]
        Assurez-vous que le résultat peut être analysé par JSON.parse() sans erreur.`,
    `Voici les informations suivantes sur un projet e-commerce : ${JSON.stringify(projet)}.
        En les utilisants, génère moi des suggestions des profils fictifs pouvant représenter un potentiel client pour notre projet en vue d\'atteindre notre objectif !
        Veuillez renvoyer le résultat sous forme d'un objet JSON contenant les quatre catégories de résultats, avec une structure similaire à celle-ci :
        [{"id": 1, "profil": ""}, ..., {"id": 10, "profil": ""}]
        Assurez-vous que le résultat peut être analysé par JSON.parse() sans erreur.`
];
  
fetchSequentially(prompts)
    .then(results => {
        console.log("----------------------------------------------------------");
        console.log(results);
    })
    .catch(error => {
        console.error(error);
    });