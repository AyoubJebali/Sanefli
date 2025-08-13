    const mealplan= document.querySelector('.mealplan');
    const meal= document.querySelector('.meal');
    const namesearch = document.getElementById('NameSearch');
    const apiKey = "get your own api key from spoonacular.com";
    const MSearch = document.querySelector('.SearchResults');
    const mealSearchTemplate= document.querySelector('.SearchSelect');
    const typeSelect = document.querySelector('.type');
    const timeFrameSelect = document.querySelector('.timeframe');
    const Logo = document.querySelector('.logo');
    let WeekData=Boolean(false);
    let Mondaydata=Boolean(false);
    let TuesdayData=Boolean(false);
    let WednesdayData=Boolean(false);
    let ThursdayData=Boolean(false);
    let FridayData=Boolean(false);
    let SaturdayData=Boolean(false);
    let SundayData=Boolean(false);
    let fetched = Boolean(false);
    let Day = 'Monday';
    Logo.onclick = function(){
        location.reload();

    }
    let html = "";
    let Meal = new Boolean(true);
    function GiveActive(classname){
        let day = ['Monday','Tuesday','Wednesday','Thursday','Friday','Saturday','Sunday'];
        let days = ['monday','tuesday','wednesday','thursday','friday','saturday','sunday'];
        let datas = JSON.parse(WeekData);
        day.forEach(function(item){
            document.querySelector(`.${item}`).classList.remove('active');
          });
        days.forEach(function(item){
            document.querySelector(`.${item}`).style.display="none";
          });
          let dayelement = day.indexOf(classname);
        document.querySelector(`.${classname}`).classList.add('active');
       switch(dayelement){
           
            
            case 1:
                 
                    if(TuesdayData==false){
                        html='';
                        datas.week.tuesday.meals.forEach(meal =>{
                            fetchMeal(meal,'tuesday');
                           
                            
                        }
                        );
                        TuesdayData=true;
                    }
                    
                    
                break;
            case 2:
                if(WednesdayData==false){
                html='';
                datas.week.wednesday.meals.forEach(meal =>{
                    fetchMeal(meal,'wednesday');
                    
                    
                }
                );
                WednesdayData=true;
                }
                break;
            
            case 3:
                if(ThursdayData==false){
                html='';
                datas.week.thursday.meals.forEach(meal =>{
                    
                    fetchMeal(meal,'thursday');
                    
                }
                );
                ThursdayData=true;
                }
                break;
            case 4:
                if(FridayData==false){
                html='';
                    datas.week.friday.meals.forEach(meal =>{
                        fetchMeal(meal,'friday');
                        
                    }
                    );
                    FridayData=true;
                }
                    break;

            case 5:
                if(SaturdayData==false){
                html='';
                datas.week.saturday.meals.forEach(meal =>{
                    fetchMeal(meal,'saturday');
                   
                }
                );
                SaturdayData=true;
                }
                break; 
            case 6:
                if(SundayData==false){
                html='';
                    datas.week.sunday.meals.forEach(meal =>{
                        fetchMeal(meal,'sunday');
                        
                    }
                    );
                    SundayData=true;
                }
                break; 

            default:
                break;
            


       }
        document.querySelector(`.${days[dayelement]}`).style.display="inherit";
        Day = classname;
        console.log(html);
    }
    mealplan.onclick = function() {
        mealplan.classList.add('active');
        meal.classList.remove('active');
        namesearch.classList.add('inactive');
        typeSelect.classList.add('inactive');
        timeFrameSelect.classList.remove('inactive');
        Meal = false;
    }
    meal.onclick = function() {
        meal.classList.add('active');
        mealplan.classList.remove('active');
        namesearch.classList.remove('inactive');
        typeSelect.classList.remove('inactive');
        timeFrameSelect.classList.add('inactive');
        Meal = true;
    }
    function loader() {
      document.querySelector('.loader').classList.add('fade-out');
    }
    function fadeOut() {
      setInterval(loader, 3000);
    }
    window.onload = fadeOut();
    function MealSearch( ){
        let calories = parseInt(document.getElementById('Csearch').value.trim());
        let diet = document.querySelector('.DietSelect').value.trim();
        let type = document.querySelector('.TypeSelect').value.trim();
        let name = document.getElementById('Nsearch').value.trim();
        let timeframe = document.querySelector('.daySelect').value.trim();
        if(Meal == true){
            fetch(`https://api.spoonacular.com/recipes/complexSearch?apiKey=${apiKey}&query=${name}&maxCalories=${calories}&type=${type}&diet=${diet}`)
                .then(response => response.json())
                .then(data => {
            
            
                    if (data.results) {
                        let counter=0;
                        data.results.forEach(result => {
                            counter+=1;
                            if(counter<=8){
                                fetchMeal(result,'SearchResults');
                            }
                    });
                }
            
             console.log(data); 
        });
         
        }
        else{
                if(timeframe=='day'){
                fetch(`https://api.spoonacular.com/mealplanner/generate?apiKey=${apiKey}&timeFrame=${timeframe}&targetCalories=${calories}`)
                    .then(response => response.json())
                    .then(data => {
                        console.log(data);
                        if (data.meals) {  
                        data.meals.forEach(meal => {
                            fetchMeal(meal,'SearchResults');
                    });
                    
                }
            });
            
        }else{
            fetch(`https://api.spoonacular.com/mealplanner/generate?apiKey=${apiKey}&timeFrame=${timeframe}&targetCalories=${calories}`)
                    .then(response => response.json())
                    .then(data => {
                        WeekData=JSON.stringify(data);
                        //console.log(data.week.monday);
                        MSearch.style.display="inherit";
                        mealSearchTemplate.style.display="none";
                        // let test = JSON.parse(WeekData);
                        // console.log(test);
                        data.week.monday.meals.forEach(meal =>{
                            fetchMeal(meal,'monday');
                            
                            
                        }
                        );                    
                
            });
                
        }
        
    }
        
            
}
async  function fetchMeal(meal,location){
    
        await fetch(`https://api.spoonacular.com/recipes/${meal.id}/information?apiKey=${apiKey}&includeNutrition=false`)
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
                    <a class="GotoRecipe" href="${data.sourceUrl}" target=_blank>Recipe</a>
                </div>
            </div>`;
            });
            
            addHtml(html,location);
            
    }
    

function addHtml(html,location){
    
    document.querySelector(`.${location}`).innerHTML=html;
    mealSearchTemplate.style.display="none";
    MSearch.style.display="flex";
        // mealSearchTemplate.style.display="none";
        // MSearch.style.display="flex";
     
    
}

