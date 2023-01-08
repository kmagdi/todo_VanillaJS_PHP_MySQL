//const urlRoot="../server/"    //fejlesztéskor, a helyi gépen futtatva
const urlRoot="https://hangmanphp.000webhostapp.com/todo/"
//az összes adat megjelenítése+ törlés&update status -get kérések:
const getData=async (url,render) => {
    const response=await fetch(url)
    const data=await response.json()
    render(data)
}

//új adat beírása -post:
const addTodo=async (url,myFormData,render) => {
    const config={
        method: 'POST',
        body: myFormData
    }
    const response=await fetch(url,config)
    const data=await response.json()
    render(data)//frissit
}