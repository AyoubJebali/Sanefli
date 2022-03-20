const SearchBtn = document.getElementById('mysearch');
const apiKey = "b7e884972509453aac3baa448df4ca76";
const mealList = document.querySelector('.resultat');
var html= "";
//Event Listener
SearchBtn.addEventListener('keypress', function (e) {
    if (e.key == 'Enter') {
        getMealList();
    }
});
function getMealList() {
    let calories = parseInt(document.getElementById('mysearch').value.trim());
    console.log(calories);
    fetch(`https://api.spoonacular.com/mealplanner/generate?apiKey=${apiKey}&timeFrame=day&targetCalories=${calories}`)
        .then(response => response.json())
        .then(data => {
            
            
            if (data.meals) {
                
                data.meals.forEach(meal => {
                    fetch(`https://api.spoonacular.com/recipes/${meal.id}/information?apiKey=${apiKey}&includeNutrition=false`)
                    .then(response => response.json())
                    .then(data =>{
                        let imageUrl=data.image;
                        console.log(imageUrl);
                        html += `<div class="card">
                        <div class="imgBx">
                            <img src="pasta1.jpg">
                        </div>
                        <div class="content">
                            <h2>Card One:Pasta</h2>
                            <p>
                                ${data.nutrients}
                            </p>
                        </div>
                        
                    </div>`
                    });
                    
                });
                
            }
            html+=`<div class="card">
            <div class="imgBx">
                <img src="pasta1.jpg">
            </div>
            <div class="content">
                <h2>Card One:Pasta</h2>
                <p>
                    Lorem ipsum dolor sit amet consectetur
                    adipisicing elit. Cumque rerum repellendus,
                    a dignissimos voluptate numquam quos quibusdam
                    .
                </p>
            </div>
            
        </div>`
            mealList.innerHTML=html;
        });
};
