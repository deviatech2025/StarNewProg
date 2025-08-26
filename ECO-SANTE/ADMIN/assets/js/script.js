 /*const nav = document.getElementsByClassName("a");
    for (let i = 0; i < nav.length; i++) {        
        nav[i].addEventListener("click",(e)=>{
            for(let j =0;j<nav.length;j++) {
                nav[j].classList.remove("active");
            }
            nav[i].classList.add("active"); 
        })
    }*/

const imgProfil = document.getElementById("img_profil");
imgProfil.addEventListener("click",(e)=>{
    e.preventDefault();
    document.querySelector(".profil_user").classList.toggle("visible");
})

function getimage() {
    document.getElementById("changeProfil").addEventListener("change",(e)=>{
        let url = e.target.files[0];
        document.getElementById("img_profil").src = URL.createObjectURL(url);
    })
}
/*side bar header*/
const icon_bar=document.querySelector(".icon-bar");
const liste=document.querySelector(".sidebar");
console.log(liste);
icon_bar.addEventListener('click' ,()=>
{
    setTimeout(() => {
        liste.classList.toggle('visi');
    }, 150);
})

