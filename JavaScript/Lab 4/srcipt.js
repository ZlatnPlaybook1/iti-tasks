// let number = +prompt("Enter The Number : ");
// document.write(number);

// let number =  +prompt("Enter The Number : ")
// if (number % 3 == 0 && number % 4 == 0) {
//     document.write("yes")

// } else {
//     document.write("No")
// }

// let num1 = +prompt("enter the first number");
// let num2 = +prompt("enter the second number");
// let result = Math.max(num1, num2);
// document.write(result);

// let num1 = 0;
// if (num1 >= 0) {
//   document.write("Positive");
// } else {
//   document.write("Negative");
// }

// let num1 = +prompt("enter the first number");
// let num2 = +prompt("enter the second number");
// let num3 = +prompt("Enter The Third Number");
// let result = Math.max(num1, num2, num3);
// let resultMin = Math.min(num1, num2, num3);
// document.write(result);
// document.write("<br>");
// document.write(resultMin);

// let num1 = +prompt("enter the first number");
// if (num1 % 2 == 0) {
//   document.write("Even");
// } else {
//   document.write("Odd");
// }

// var chart = prompt("Enter The Char");
// let arr = ["a", "i", "o", "u", "e"];
// let y = false ;
// for (let i = 0; i < arr.length; i++) {
//   if (arr[i] === chart) {
//     y= true ;
//     break;
//   }
// }
// if (y){
//     document.write("vowel")
// }else{
//     document.write("constant")
// }

// let num = +prompt("enter number")
// for (let i = 1; i <=num; i++) {
//     document.write(i);
// }

// let num = +prompt("Enter The Number");
// for (let i = 1; i <= 12; i++) {
//   document.write("The Result is :", num * i ,"<br>");
// }

// let num = +prompt("Enter The Number");
// for (let i = 1; i <num; i++) {
//     if(i % 2 === 0 ){
//   document.write("The Result is :", i ,"<br>");
// }
// }

// let num1 = +prompt("enter the first number");
// let num2 = +prompt("enter the second number");
// document.write(num1 ** num2);

// let num1 = +prompt("Enter the first number");
// let num2 = +prompt("Enter the second number");
// let num3 = +prompt("Enter the Third number");
// let num4 = +prompt("Enter the Fourth number");
// let num5 = +prompt("Enter the Five number");
// let TotalMarks = num1 + num2 + num3 + num4 + num5;
// let AverageNarks = TotalMarks / 5 ;
// let Percentage = (TotalMarks /5 ) *100 ;
// document.write(TotalMarks , "<br>")
// document.write(AverageNarks , "<br>")
// document.write(Percentage , "<br>")


//-----------------------------------------------------------------

// const monthDays = {
//   1: 31,
//   2: 28,
//   3: 31,
//   4: 30,
//   5: 31,
//   6: 30,
//   7: 31,
//   8: 31,
//   9: 30,
//   10: 31,
//   11: 30,
//   12: 31,
// };
// let month = +prompt("Enter The Month Number :") ;
// if (month >= 1 && month <= 12) {
//   document.write(monthDays[month]);
// } else {
//   document.write("Invalid month number!");
// }

//-----------------------------------------------------------------


// let month = +prompt("Enter the month number (1-12):");
// let days;
// switch (month) {
//     case 1:
//     case 3:
//     case 5:
//     case 7:
//     case 8:
//     case 10:
//     case 12:
//         days = 31;
//         break;
//     case 4:
//     case 6:
//     case 9:
//     case 11:
//         days = 30;
//         break;
//     case 2:
//         days = 28;
//     default:
//         days = "Invalid month number!";
// }
// document.write("Number Of Days is :" , days);

//-----------------------------------------------------------------


// let chart = prompt("Enter The Char:");
// let result;
// switch (chart) {
//   case "a":
//   case "e":
//   case "i":
//   case "o":
//   case "u" :
//     result = "vowel" ;
//     break ;
//   default :
//     result = "consonant" ;
//     break ;
// }
// document.write(result) ;

// let num = +prompt("Enter The Number:");
// let theResult;
// switch (num % 2) {
//     case 0:
//         theResult = "Even";
//         break;
//     case 1:
//     case -1:
//         theResult = "Odd";
//         break;
//     default:
//         theResult = "Invalid Input";
//         break;
// }
// document.write(theResult);


//-----------------------------------------------------------------



// let num = +prompt("Enter The Number:");
// let theResult;
// switch (Math.sign(num)) {
//   case 1:
//     theResult = "Positive";
//     break;
//   case -1:
//     theResult = "Negative";
//     break;
//   case 0:
//     theResult = "Zero";
//     break;
//   default:
//     theResult = "Invalid Input";
//     break;
// }
// document.write(theResult);
