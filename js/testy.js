function q(param){
  return console.log(param);
}


// // alert('Lokhar');
// // console.log('W konsoli Maosiu!');

// // let agitator = 12;
// // console.log(agitator);

// // let fn = 'Sylwia';
// // let sep = ' ';
// // let sn = 'Krupa';

// // let email = 'sziszimorak@gmail.com';
// // console.log(fn.length);

// // console.log(sn.toLowerCase());
// // console.log(email.indexOf('@'));

// // console.log(fn.slice(2) + sn.slice(2));
// // let rusia = (((sn.substring(1,3) + fn.substring(0,1) + fn.substring(4,6)).toLowerCase()).substring(0,1)).toUpperCase() + 
// // (sn.substring(1,3) + fn.substring(0,1) + fn.substring(4,6)).toLowerCase().substring(1,5);



// // console.log(rusia);

// // let likes = 99;
// // likes++;
// // likes*=10;
// // console.log(likes);

// // let konkatenacja = 'połączmy te wyrazy z cyframi: ' + likes;
// // console.log(konkatenacja);

// // let konkatenacja2 = `połączmy te wyrazy z cyframi:   ${likes} co to  ${fn} ${agitator}`;
// // console.log(konkatenacja2);

// // let konkatenacja3 = `
// //     <h1>${fn}</h1>
// //     <h2>${sn}</h2>
// //     <h2>ma lat ${agitator}</h2>`;
// // console.log(konkatenacja3);




// // konkatenacja2 = [1,  konkatenacja2, 'cos prywatnego'];
// // konkatenacja2[2] = 'może coś mniej prywatnego';

// // let kawalki = ['D','mi','n', 'k'];
// // console.log(kawalki.join('a'));

// // let coto = kawalki.push('upasa');


// // console.log(kawalki);


// // let ciastko = NaN;
// // console.log(ciastko, ciastko + 3, `Lubie kokosanke, czyli ${ciastko}`);



// // kawalki = ['coo','coco','oco', 'k'];
// // let email2 = 'coco';
// // let wynik = kawalki.includes(email2);
// // console.log(wynik);

// // console.log(null==NaN);




// // console.log(1==a);
// // console.log('25'===25);


// let score = '100';
// score = Number(score)
// console.log(score + 1);

// // score = String(score)
// // console.log(score + 1);

// score = Boolean(0);
// console.log(score, typeof score);

// let cars = [0, 1, 2, 3, 4, 5, 6, 7, 8, 9];

// for (let i = 0; i < cars.length; i++) {
//     console.log('in.loop:');
//   }


//   let n = 0;
//   while (n < cars.length) {
//     console.log(`Krokodyl_${n}`);
//     n++;
//   };

// let i = 10;
//   do {
//     i+=1;
//     console.log(`Hipochondyk${i}`);
//  } while (i<12);


//  const d = new Date();
//  let hour = d.getHours();
//  hour = -3;

//  if ((hour < 18) && (hour!=0) && (hour!=-1) && (hour!=-2) ) {
//   let i = 10;
//   do {
//     i+=1;
//     console.log(`Dzien dobry ${i}`);
//  } while (i<18);
// }else if(hour===0){
//   for (let i = 0; i < 20; i++) {
//     console.log('mamy polnoc:',i);
// }
// }else if((hour===-2) || (hour===-1)){
//   for (let i = 0; i < 20; i++) {
//     console.log('mamy wartosc minusowa:',i);
// }
// }else{
//   console.log('Dobry wieczor');
// }



// if(!'zaba'){
//   console.log('jest true');
//  }else{
//   console.log('jest false');
//  }
 



//  for (let i = 0; i < 30; i++){
//   if(i==13){
//     continue;
//   }else if(i==20){
//     console.log('Mamy 20:',i);
//     break
//   }else{
//     console.log('Mamy:',i);
//   }
// }


switch (new Date().getDay()) {
  case 0:
    day = "Sunday";
    break;
  case 1:
    day = "Monday";
    break;
  case 2:
     day = "Tuesday";
    break;
  case 3:
    day = "Wednesday";
    console.log(day);
    break;
  case 4:
    day = "Thursday";
    console.log(day);
    break;
  case 5:
    day = "Friday";
    console.log(day);
    break;
  case 6:
    day = "Saturday";
  default:
    day = "zakrzywnie czasoprzestrzeni";
    console.log(day);
}


let foka = "zwierze";
if(true){
	foka = "piekne zwierze";
	console.log(foka);
}
console.log(foka);
  console.log(foka);





  let rasa = 'ork';
  let klasa = 'barbarian';
  
  let rasa1 = 'elf';
  let klasa1 = 'huner';


console.log(okrzyk_bojowy(rasa1, 'magician'));


function okrzyk_bojowy(rasa, klasa){
  if (rasa=='ork' && klasa=='barbarian'){
    console.log('I will smash you cute face!');
  }else if(rasa=='ork' && klasa=='shaman'){
    console.log('The flames devauer you!');
  }else if(rasa=='elf' && klasa=='huner'){
    console.log('My arrow is the last thin you ever see!');
  }else if(rasa=='elf' && klasa=='magician'){
    console.log('Taste my superior');
  }else
    console.log('Gin, sukinsynie!');
}


// function circle_area(r){
//   let area = 3.14 * r**2;
//   return area
// }
// var area = circle_area(3);

// console.log(area+1000);


// let mnoznik = (a, b) => a * b;
// let wynik = mnoznik(2,200);

// var kocur = param => param%2;
// for (let i = 0; i < 12; i++) {
//        q(kocur(i));
//      }


//   q(kocur(41));





// // ranks.forEach(function (e){
// //   q(e);
// // });

// // ranks.forEach(e => {
// //   q(e);
// // });



// // //Oto jak szybko stworzyc liste w html:
// // const ranks = ['green', 'blue', 'red', 'purple'];
// // let html = ``;
// // ranks.forEach(function (element){
// //   html += `<li style="color: ${element}"> ${element} </li>`;
// // });
// // //ustawiamy zmienna, ktora funkcja lokalizuje pierwszy paragraf klasy (class="mb-3") html-owej (nawet w echo PHP-a)
// // const ul = document.querySelector('.mb-3');
// // //maly podglad testowy w konsoli:
// // q(html);
// // //wstrzyknijmy nasz wynik, aby byl widoczny nie w kosnoli, lecz na stronie
// // // ul.innerHTML = html;



// // let user ={
// //   name: 'crystal',
// //   age: 30,
// //   email: 'crystal@gmail.com',
// //   location: 'Warsaw',
// //   blogs: ['O powinnoiwactwie elektromgnetycznym kolmatantow poflatacyjnych z rud boksytowych z Czeremchowej kolo Brzeska']
// // };
// // q(user['email']);
// // user.location = 'Moszczaniec';
// // q(user.location);

// // klucz = 'blogs';
//  //user[klucz] = 'Rozmaitosc topologiczna wezlow marynarskich na podstawie wezla Gordona Ramseya z Rybnika kolo Swinoujscia';


// // q(typeof klucz);

// let user ={
//   name: 'Crystal',
//   age: 30,
//   email: 'crystal@gmail.com',
//   location: 'Warsaw',
//   blogs: ['O powinnoiwactwie elektromgnetycznym kolmatantow poflatacyjnych z rud boksytowych z Czeremchowej kolo Brzeska'],
//   array: ['pp','as567','ahgfds','aass','s'],
//   logIn: function (){
//     console.log('Wylogowany');
//   },
//   logOut: function (){
//     console.log('Zalogowany');
//   },
//   greet: function (){
//     console.log(`Czesc, nazywam sie ${this.name}, mam ${this.age} lat i napisalam prace pt. "${this.blogs}". O cholera... ${this.logIn()}`);
//   },
//   ciekawe: function (){
//     this.array.forEach( e => {
//       console.log(e);
//     })
//   }

// };

// user.ciekawe();
// user.greet();


// const losowe = Math.random();
// q(Math.round(losowe*100));







// var test = `<?php echo 'Co to?'; ?>`;

// q(test);







// //Prawo de Morgana:
// // q(true && false)
// // q(true || false)

// // q(true || true)
// // q(false && false)







// // const para = document.querySelector("div.mb-3:nth-child(3)");
// // q(para);

// const para2 = document.querySelectorAll("html body div.container form");
// q(para2);


// para2.forEach(e => {
//   q(e);
// });


// const title = document.getElementById("speciality");
// q(title[0]);

// const title2 = document.getElementsByClassName("mb-3");
// q(title2);

// const title = document.getElementsByTagName("form");
// q(title);

// title.forEach(e => {
//   q(title.innerText='Witaj chlopcze');
// });


// const title = document.querySelector('.text-center');
// q(title.innerText);

// const title2 = document.querySelector('div.mb-3:nth-child(8) > label:nth-child(1)');
// // q(title2.innerHTML='Witaj chpcze');

// title2.forEach(e => {
//    q(title2.innerHTML='Witaj chlopcze');
//  });


// kaczka = ['dam','Ci','w morde'];
// const para2 = document.querySelector(".morty");
// q(para2.innerText)

// kaczka.forEach(e => {
//   para2.innerHTML += `<br>${e}<br>`;
// });


// const link = document.querySelector('.container > a:nth-child(4)');
// link.setAttribute('href', "https://docs.google.com/document/d/1rylu7SRjPYwj6cn96zRAnRsv5FI-sRgfC_pyPDJjhdc/edit"); 
// link.innerHTML = 'Notatki JS';
// q(link.getAttribute('href'));

//A jak zmienic metode forma z post na get?
// const link2 = document.querySelector('.container > form:nth-child(8)');
// link2.setAttribute('method', 'get');
// q(link2.getAttribute('method'));

// const link2 = document.querySelector('.container > form:nth-child(8)');
// link2.setAttribute('class', 'asd');
// q(link2.getAttribute('class'));


// function error_success(param, param2){
//   const komunikat = document.querySelector(`.${param}`);
//   // komunikat.classList.remove('success');
//   // komunikat.classList.remove('error');
//   if(param2=='s'){
//     komunikat.classList.add('success');
//     komunikat.innerText = 'Success';
//   }
//   else if(param2=='e'){  
//     komunikat.classList.add('error');
//     komunikat.innerText = 'Error';
//   }
//   else
//     q('Dozwolone wartosci to: "s" i "e".')
//   }


//q(error_success('komunikat','e'));
// q(document.querySelector('.komunikat').classList);








// const komunikat = document.querySelector('.container > p:nth-child(4)');
//   let zawiera = komunikat.innerText.includes('error');
//   if(true){
//     q('Mysi krlik');
//   };
  
//   let ok = zawiera==false;
//   q(ok);

 

// for (let i = 0; i < 7; i++){
//   const komunikat = document.querySelector(`.container > p:nth-child(${i})`);
//   if(true){
//     komunikat.classList.add('error');
//   }
//   else if(komunikat.innerText.includes('success')=='false'){
//     komunikat.classList.add('success');
//   }else{
//     q('dupa');
//   }
// }

// for (let i = 0; i < 7; i++){
//   const komunikat = document.querySelector(`.container > p:nth-child(${i})`);
//   if(komunikat.innerText.includes('error')=='true'){
//     komunikat.classList.add('error');
//   }
//   else if(komunikat.innerText.includes('success')=='false'){
//     komunikat.classList.add('success');
//   }else{
//     q('dupa');
//   }
// }


// for (let i = 0; i < 3; i++){
//   komunikat = document.querySelector(`.container > p:nth-child(${i})`);
//   komunikat.innerText('asdasd')
// }

// let komunikat = document.querySelector('.container > p:nth-child(4)');
// komunikat = komunikat.innerText='dziwne';

// for (let i = 4; i < 12; i++){
//   //document.querySelector(`.container > p:nth-child(${i})`).innerText='dziwne';
//   // q(document.querySelector(`.container > p:nth-child(${i})`).innerText.includes('error'));
//   let zawiera = document.querySelector(`.container > p:nth-child(${i})`).innerText.includes('error');
//   if(zawiera){ 
//     document.querySelector(`.container > p:nth-child(${i})`).classList.add('error'); 
//   }else{
//     document.querySelector(`.container > p:nth-child(${i})`).classList.add('success');
//   }
// }


// for (let i = 4; i < 12; i++){
//   let zawiera = document.querySelector(`.container > p:nth-child(${i})`);
//   if(zawiera.textContent.includes('error')){ 
//     zawiera.classList.add('error'); 
//   }else{
//     zawiera.classList.add('success');
//   }
// }

// const moje = document.querySelector('form');
// Array.from(moje.children).forEach(e =>{
//   e.classList.add('error');
// } )

// const moje = document.querySelector('list');
// q(moje.parentElement);
// q(moje.nextElementSibling);
// q(moje.previousElementSibling);
// q(moje.children);

// const button = document.querySelector('.container > button:nth-child(7)');
// button.addEventListener('click', () => {
//   q('you clicked me');
// } );

// const button = document.querySelector('.container > button:nth-child(7)');
// button.addEventListener('click', () => {
//   let lista = document.getElementById('13');
//   let first = lista.firstElementChild;
//   q(lista);
//   first.remove();
// } );

// const lista = document.querySelectorAll('li');
// lista.forEach(item => {
//   item.addEventListener('click', (e) => {
//     //item.remove(e);
//     e.target.style.textDecoration = 'line-through';
//     e.target.classList.add('success');
//   })
// });



// const button = document.querySelector('.container > button:nth-child(7)');
// button.addEventListener('click', () => {
//   //podaj pozycje jego umieszczenia, czyli rodzica
//   var pozycja = document.querySelector('ul');
//   //utworz element, ktory chcesz dodac i daj mu jakis tekst
//   var typ = document.createElement('li');
//   typ.textContent = 'A co to?';
//   //dodaj element
//   pozycja.append(typ);
//   //Alternatywnie:
//   //pozycja.innerHTML += '<li>cos tam jack</li>';
// } );



// const zycie = document.querySelector('.container > div:nth-child(5)');
// const rozum = document.querySelector('.container > div:nth-child(5) > div:nth-child(1)');
// const szkielet = document.querySelector('ul');
// const lista = document.querySelectorAll('li');
// lista.forEach(item => {
//   item.addEventListener('click', (e) => {
//     //item.remove(e);
//     e.target.style.textDecoration = 'line-through';
//     e.target.classList.add('success');
//   })
// });

// szkielet.addEventListener('click', (e) => {
//   //q(e.target);
//   //q(e);
//   if(e.target.tagName === 'LI'){
//     q(e);
//   }
//   else{
//     q('dupa kolego');
//   }
//   //tym dziadem zatrzymuje bubbling
//   e.stopPropagation();
// })

// rozum.addEventListener('click', (e) => {
//   q(e.target);
//   q(e);
// })

// zycie.addEventListener('click', (e) => {
//   q(e.target);
//   q(e);
// })


const copy = document.querySelector('.copyme');
copy.addEventListener('copy',  e => {
  q("Kopiujesz!");
})

const square = document.querySelector('.box');
Xarray = [0];
Yarray = [0];
suma_dlugosci = [];
square.addEventListener('mousemove',  e => {
  let x = e.offsetX;
  let y = e.offsetY;
  Xarray.push(x);
  Yarray.push(y);

  //pierwszy punkt
  x = Xarray.at(-1);
  y = Yarray.at(-1);

  //drugi punkt
  x2 = Xarray.at(-2);
  y2 = Yarray.at(-2);

  dlugosc_odcinka = Math.floor(Math.sqrt(Math.pow((x2-x),2)+Math.pow((y2-y),2)))*0.0264583333;
  if(dlugosc_odcinka<3){
    suma_dlugosci.push(dlugosc_odcinka);
    document.getElementById("parametr").innerHTML = suma_dlugosci.reduce((a,b) => a+b)  + ' cm';
  }else{
    suma_dlugosci.push(0.0000001);
    document.getElementById("parametr").innerHTML = suma_dlugosci.reduce((a,b) => a+b)  + ' cm';
  }
})




// document.addEventListener('wheel',  e => {
//   q(e);
// })


const button = document.querySelector('#button');
const popup = document.querySelector('.popup-wrapper');
const close = document.querySelector('.popup-close');

button.addEventListener('click', () => {
  popup.style.display = 'block';
});

close.addEventListener('click', () => {
  popup.style.display = 'none';
})

const feedback = document.querySelector('.feedback');
const form = document.querySelector('#signup-form');
form.addEventListener('submit', e => {
  e.preventDefault();
  //mozemy sie odniesc do id lub name
  const pattern = /[A-Z][a-z]{5,}/
  let username = form.username.value;
  if(pattern.test(username)){
    q(form.username.value);
    feedback.innerHTML = form.username.value;
  }else{
    q('Wartosc niepoprawna.');
    feedback.innerHTML = 'Wartosc niepoprawna.';
  }
});


//live feedbanck

form.username.addEventListener('keyup', e => {
  //q(e.target.value, form.username.value);
 // e.preventDefault();
  const pattern = /[A-Z][a-z]{5,}/
  let username = e.target.value;
  if(pattern.test(username)){
    //q('Pasuje');
    form.username.setAttribute('class', 'success');
 }else{
    form.username.setAttribute('class', 'error');
 }
})
