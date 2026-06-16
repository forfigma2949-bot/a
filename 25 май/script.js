let button = document.querySelector('#button');
let parentInput = document.querySelector('#parent input');
let classElem = document.querySelector('.elem'); 
let firstParagraphBlockId = document.querySelector('#block p');
let firstParagraphBlockClass = document.querySelector('.block p');
let firstParagraphWwwClass = document.querySelector('.www p');
let elem = document.querySelector('#elem');

let button1 = document.querySelector('#button1');
let button2 = document.querySelector('#button2');
let button3 = document.querySelector('#button3');

let elem1 = document.querySelector('#elem1');
let elem2 = document.querySelector('#elem2');
let elem3 = document.querySelector('#elem3');
let elem4 = document.querySelector('#elem4');
let elem5 = document.querySelector('#elem5');
let block = document.querySelector('#block');

let linkTask = document.querySelector('#link');
let imgTask = document.querySelector('#image');

let input1 = document.querySelector('#parent2 input:nth-child(1)');
let input2 = document.querySelector('#parent2 input:nth-child(2)');
let inputs = document.querySelectorAll('#parent2 input, #parent input, #elem-email');
let inputTask1 = document.querySelector('#elem-email');

let elemClasses = document.querySelector('#elem-classes');
let elemEmpty = document.querySelector('#elem-empty');
let elemTriple = document.querySelector('#elem-triple');

function func() {
	console.log('message');
}
function func1() {
	console.log('1');
}
function func2() {
	console.log('2');
}
function func3() {
	console.log('3');
}

function inputBlurFunc() {
	this.value = Number(this.value) + 1;
}

function addHref() {
	if (linkTask) {
		linkTask.textContent = linkTask.textContent + ' (' + linkTask.href + ')';
	}
	button1.removeEventListener('click', addHref);
}

function countToTen() {
	this.value = Number(this.value) + 1;
	if (Number(this.value) === 10) {
		button.removeEventListener('click', countToTen);
	}
}

button.addEventListener('click', function() {
	console.log('!!!');
	console.log(elem.innerHTML);
	elem.innerHTML = '<b>Новый жирный текст!</b>';
	
	if (parentInput) {
		alert(parentInput.type);
		parentInput.type = 'submit';
	}
	
	if (elemClasses) {
		alert(elemClasses.className);
	}
	if (elemEmpty) {
		elemEmpty.className = 'new-class-name';
	}
	if (elemTriple) {
		let classesArray = elemTriple.className.split(' ');
		console.log(classesArray);
	}
});
button.addEventListener('click', func); 
button.addEventListener('click', countToTen);

button.addEventListener('dblclick', function() {
	alert('Вы совершили двойной клик!');
});
button.addEventListener('mouseover', function() {
	console.log('1');
});
button.addEventListener('mouseout', function() {
	console.log('2');
});

button1.addEventListener('click', function() {
	console.log(elem1.textContent);
	elem1.textContent = 'Халлоу';
	
	if (linkTask) {
		elem1.textContent = linkTask.href;
	}
	
	if (parentInput) {
		parentInput.value = 'Привет, мир!';
		elem1.textContent = parentInput.value;
	}
	
	let paragraphsTask1 = document.querySelectorAll('p');
	paragraphsTask1.forEach(function(paragraph) {
		paragraph.textContent = 'text';
	});
});
button1.addEventListener('click', func1);
button1.addEventListener('click', addHref);

button2.addEventListener('click', function() {
	let combinedText = elem1.textContent + ' ' + elem2.textContent;
	alert(combinedText);
	
	if (imgTask) {
		elem2.textContent = imgTask.src;
		imgTask.width = 300;
		imgTask.width = imgTask.width * 2;
		imgTask.src = 'img.jpg';
	}
	
	if (input1 && input2) {
		let num = Number(input1.value);
		input2.value = num * num;
		
		let temp = input1.value;
		input1.value = input2.value;
		input2.value = temp;
	}
	
	let paragraphsTask2 = document.querySelectorAll('p');
	paragraphsTask2.forEach(function(paragraph, index) {
		paragraph.textContent = paragraph.textContent + (index + 1);
	});
});
button2.addEventListener('click', func2);

button3.addEventListener('click', function() {
	let fullText = elem1.textContent + ', ' + elem2.textContent + ', ' + elem3.textContent;
	block.textContent = fullText;
	elem1.textContent = elem1.textContent + ' + 1';
	elem2.textContent = elem2.textContent + '!';
	
	if (imgTask) {
		imgTask.src = 'img2.jpg';
	}
	
	let sum = 0;
	let count = 0;
	inputs.forEach(function(input) {
		if (input.value !== '') {
			sum += Number(input.value);
			count++;
		}
	});
	if (count > 0) {
		elem3.textContent = sum / count;
	} else {
		elem3.textContent = 0;
	}
	
	let inputsTask3 = document.querySelectorAll('input[type="text"], input[type="email"]');
	let sumTask3 = 0;
	inputsTask3.forEach(function(input) {
		sumTask3 = sumTask3 + Number(input.value);
	});
	elem1.textContent = sumTask3;
});

let textParagraphs = document.querySelectorAll('p');
textParagraphs.forEach(function(paragraph) {
	paragraph.addEventListener('click', function() {
		this.textContent = this.textContent + '!';
	});
	paragraph.addEventListener('click', function() {
		let num = Number(this.textContent);
		if (!isNaN(num)) {
			this.textContent = num * num;
		}
	});
});

let numberInputs = document.querySelectorAll('#parent2 input, #parent input');
numberInputs.forEach(function(input) {
	input.addEventListener('blur', function() {
		let num = Number(this.value);
		this.value = num * num;
	});
});

let allInputs = document.querySelectorAll('input');
allInputs.forEach(function(input) {
	input.addEventListener('blur', inputBlurFunc);
});

if (inputTask1) {
	inputTask1.addEventListener('focus', function() {
		this.value = 1;
	});
	inputTask1.addEventListener('blur', function() {
		this.value = 2;
		let num = Number(this.value);
		alert(num * num);
	});
}
let divs = document.querySelectorAll('div');
for (let div of divs) {
	div.addEventListener('click', function() {
		this.textContent++;
	});
}
let items1 = document.querySelectorAll('ul li');
items1.forEach(function(item) {
	item.addEventListener('click', function() {
		this.textContent = Number(this.textContent) + 1;
	});
});
let yearsList = document.querySelectorAll('ul li');
let totalYearsSum = 0;
yearsList.forEach(function(item) {
	let yearString = item.textContent;
	let digitsSum = 0;
	for (let char of yearString) {
		digitsSum += Number(char);
	}
	if (digitsSum === 6) {
		totalYearsSum += Number(yearString);
	}
});
console.log(totalYearsSum);
elem.addEventListener('click', func1);
elem.addEventListener('click', func2);
elem.addEventListener('click', func3);
elem1.addEventListener('click', func);
elem2.addEventListener('click', func);
elem3.addEventListener('click', func);
elem4.addEventListener('click', func);
elem5.addEventListener('click', func);
if (imgTask) {
	console.log(imgTask.src);
	console.log(imgTask.width);
	console.log(imgTask.height);
}
console.log(button);
console.log(parentInput);
console.log(classElem); 
console.log(firstParagraphBlockId);
console.log(firstParagraphBlockClass);
console.log(firstParagraphWwwClass);
