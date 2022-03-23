const SearchBtn = document.getElementById('mysearch');
const apiKey = "661a7dedbbdb4c8cbdd22ecc23975fdf";
const mealList = document.querySelector('.resultat');
let html="";
//Event Listener
SearchBtn.addEventListener('keypress', function (e) {
    if (e.key == 'Enter') {
       getMealList(html);
       
       setTimeout(()=>{
        mealList.innerHTML=html;
        console.log('time finished');
            },5000);
    }
   
    
});
function getMealList(html) {
    let calories = parseInt(document.getElementById('mysearch').value.trim());
    
    fetch(`https://api.spoonacular.com/mealplanner/generate?apiKey=${apiKey}&timeFrame=day&targetCalories=${calories}`)
        .then(response => response.json())
        .then(data => {
            
            
            if (data.meals) {
                
                data.meals.forEach(meal => {
                    fetchMeal(meal);
                    
                });
                
            }
        });
    
};
function fetchMeal(meal){
    fetch(`https://api.spoonacular.com/recipes/${meal.id}/information?apiKey=${apiKey}&includeNutrition=false`)
        .then(response => response.json())
        .then(data =>{
            
            
            html += `<div class="card">
                <div class="imgBx">
                    <img src="${data.image}">
                </div>
                <div class="content">
                    <h2>${data.title}</h2>
                    <ul>
                    <li>Number of servings: ${data.servings}</li>
                    <li>Preparation time: ${data.readyInMinutes} minutes </li>
                    </ul>
                    <a class="GotoRecipe" href="${data.sourceUrl}">Recipe</a>
                </div>
            </div>`;
            console.log(data);
            
            });
    
};
