const workouts = [
    { name: 'traps'},
    { name: 'traps mid-back'},
    { name: 'shoulders'},
    { name: 'chest'},
    { name: 'biceps'},
    { name: 'forearms'},
    { name: 'abdominals'},
    { name: 'quads'},
    { name: 'calves'},
    { name: 'triceps'},
    { name: 'lats'},
    { name: 'lower-back'},
    { name: 'glutes'},
    { name: 'hamstrings'},
    { name: 'calisthenics'},
    { name: 'powerlifting'},
    { name: 'posture'},
    { name: 'bmi'},
    { name: 'injury'},
    { name: 'warm-up'},
    { name: 'techniques'}
]

const searchInput = document.querySelector('.input');

searchInput.addEventListener("input", (e) => {
    let value = e.target.value

    //check if input exists
    if (value && value.trim().length > 0){
         value = value.trim().toLowerCase()

         setList(workouts.filter(workout => {
             return workout.name.includes(value)
         }))
    } else {
        //no results found message
        clearList()
    }

})

function setList(results){
    clearList()
    for (const search of results){
        if (results.text == "traps") {
            alert("AAAAAA");
        }
        const resultItem = document.createElement('li')
        resultItem.classList.add('result-item')
        const text = document.createTextNode(search.name)
        resultItem.appendChild(text)
        list.appendChild(resultItem)
    }

    if (results.length === 0){
        noResults()
    }
}

function clearList(){
    //loop through each child of the search results list and remove each child
    while (list.firstChild){
        list.removeChild(list.firstChild)
    }
}

function noResults(){
    const error = document.createElement('li')
    error.classList.add('error-message')

    const text = document.createTextNode('No results found. Sorry!')
    error.appendChild(text)
    list.appendChild(error)
}