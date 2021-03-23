/*
* map()
* the method creates a new array with the results of calling a function for every array element.
* Note: this method does not change the original array.
*/

let numbers = [4, 9, 16, 25];
numbers.map(Math.sqrt); // 2, 3, 4, 5

let persons = [
    {firstname : "Malcom", lastname: "Reynolds"},
    {firstname : "Kaylee", lastname: "Frye"},
    {firstname : "Jayne", lastname: "Cobb"}
];

function getFullName(item) {
    return [item.firstname, item.lastname].join(" ");
}

persons.map(getFullName); // 0: "Malcom Reynolds" 1: "Kaylee Frye" 2: "Jayne Cobb"

/*
* filter()
* the method creates an array filled with all array elements that pass a test (provided as a function).
* Note: filter() does not execute the function for array elements without values.
* Note: filter() does not change the original array.
*/

let ages = [32, 33, 16, 40];

function checkAdult(age) {
    return age >= 18;
}

ages.filter(checkAdult); // 32, 33, 40

/*
* reduce()
* method reduces the array to a single value.
* The reduce() method executes a provided function for each value of the array (from left-to-right).
* Note: reduce() does not execute the function for array elements without values.
* Note: This method does not change the original array.
*/

let numbers2 = [175, 50, 25];
numbers2.reduce(myFunc); // 100

function myFunc(total, num) {
    return total - num;
}

let numbers3 = [15.5, 2.3, 1.1, 4.7];

function getSum(total, num) {
    return total + Math.round(num);
}

numbers3.reduce(getSum, 0); // 24

const array = [1, 2, 3, 4, 5];
array.reduce((accumulator, currentElement) => accumulator + currentElement, 0); // 15
array.reduce((accumulator, currentElement) => accumulator + currentElement, 2); // 17

/*
* find()
* method returns the value of the first element in an array that pass a test (provided as a function).
* the find() method executes the function once for each element present in the array
* if it finds an array element where the function returns a true value, find() returns the value of that array element (and does not check the remaining values)
* otherwise it returns undefined
* find() does not execute the function for empty arrays.
* Note: find() does not change the original array.
*/

let ages2 = [3, 10, 18, 20];

function checkIsAdult(age) {
    return age >= 18;
}

ages2.find(checkIsAdult); // 18


/*
* includes()
* method determines whether a string contains the characters of a specified string.
* This method returns true if the string contains the characters, and false if not.
* Note: The includes() method is case sensitive.
*/

let str = "Hello world, welcome to the universe.";
let n = str.includes("world"); // true

// check if a string includes "world", starting the search at position 12:
let n2 = str.includes("world", 12); // false
