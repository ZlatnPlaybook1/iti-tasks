// function enterNumber(num){
//     num = +prompt("Enter The Number : ")
//     return num
// }
// document.write(enterNumber())

// ------------------------------------------------------

// function enterNumber(num) {
//   num = +prompt("Enter  The Number : ");
//   if (num % 4 == 0 && num % 3 == 0) {
//     return "Yes";
//   } else {
//     return "No";
//   }
// }
// document.write(enterNumber());

// ------------------------------------------------------

// function enterNumber(num1 , num2){
//     num1 = +prompt("Enter The first Number : ")
//     num2 = +prompt("Enter The second Number : ")
//     return Math.max(num1 , num2) ;
// }
// document.write(enterNumber())

// ---------------------------------------------------

// function enterNumber(num) {
//   num = +prompt("Enter The Number : ");
//   if (num > 0) {
//     return "positive";
//   } else {
//     return "negative";
//   }
// }
// document.write(enterNumber());

// -----------------------------------------------

// function enterNumber(num1, num2, num3) {
//   num1 = +prompt("Enter The first Number : ");
//   num2 = +prompt("Enter The second Number : ");
//   num3 = +prompt("Enter The Third Number : ");
//   let theMax = Math.max(num1, num2, num3);
//   let theMin = Math.min(num1, num2, num3);
//   return { max: theMax, min : theMin };
// }
// const TheResult = enterNumber();
// document.write(`Maximum: ${TheResult.max}, Minimum: ${TheResult.min}`);

// -----------------------------------------------


// function oddOrEven(num) {
//   num = +prompt("Enter The Number: ");
//   if (num % 2 == 0) {
//     return "Even";
//   } else {
//     return "Odd";
//   }
// }
// document.write(oddOrEven());

// ------------------------------------------------

// function chart() {
//     let MyChart = ["a", "e", "i", "o", "u"];
//     let char = prompt("Enter The Character").toLowerCase();
//     for (let i = 0; i < MyChart.length; i++) {
//       if (char === MyChart[i]) {
//         return "vowel";
//       }
//     }
//     return "consonant";
//   }
// document.write(chart());

// ---------------------------------------------------

// function rangeNumber() {
//     const num = parseInt(prompt("Enter The Number"), 10);
//     let range = [];
//     for (let i = 0; i < num; i++) {
//       range.push(i);
//     }
//     return range.join(', ');
// }
// document.write(rangeNumber())

// ----------------------------------------------------

// function rangeNumber() {
//     const num = parseInt(prompt("Enter The Number"), 10);
//     let range = [];
//     for (let i = 1; i <= 12; i++) {
//       range.push(i* num);
//     }
//     return range.join(', ');
// }
// document.write(rangeNumber())

// ----------------------------------------------------
// function evenNumber() {
//   const num = +prompt("Enter The Number");
//   let result = "";
//   for (let i = 1; i < num; i++) {
//     if (i % 2 === 0) {
//       result += `The Result is: ${i} <br>`;
//     }
//   }
//   return result;
// }
// document.write(evenNumber());

// -------------------------------------------------

// function power() {
//   let num1 = +prompt("enter the first number");
//   let num2 = +prompt("enter the second number");
//   return num1 ** num2;
// }
// document.write(power());

// --------------------------------------------------

// function calculateMarks() {
//     let marks = [];
//     for (let i = 1; i <= 5; i++) {
//         let mark = parseFloat(prompt(`Enter Marks of Subject ${i}:`));
//         while (isNaN(mark) || mark < 0 || mark > 100) {
//             mark = parseFloat(prompt(`Please enter a valid mark for Subject ${i} (0-100):`));
//         }
//         marks.push(mark);
//     }
//     const total = marks.reduce((sum, current) => sum + current, 0);
//     const average = total / marks.length;
//     const percentage = ( total / 500 ) * 100;
//     document.write(`Total Marks: ${total}<br>`);
//     document.write(`Average Marks: ${average.toFixed(2)}<br>`);
//     document.write(`Percentage: ${percentage.toFixed(2)}%<br>`);
// }
// calculateMarks();

// --------------------------------------------------

// function getMonthDays(month) {
//     const monthDays = {
//         1: 31,
//         2: 28,
//         3: 31,
//         4: 30,
//         5: 31,
//         6: 30,
//         7: 31,
//         8: 31,
//         9: 30,
//         10: 31,
//         11: 30,
//         12: 31,
//     };
//     if (month >= 1 && month <= 12) {
//         return monthDays[month];
//     } else {
//         return "Invalid month number!";
//     }
// }
// const month = +prompt("Enter The Month Number:");
// const result = getMonthDays(month);
// document.write(result);

// ---------------------------------------------

// function getMonthDays(month) {
//     month = +prompt("Enter The Month Number:");
//     let days;
//     switch (month) {
//         case 1:
//         case 3:
//         case 5:
//         case 7:
//         case 8:
//         case 10:
//         case 12:
//             days = 31;
//             break;
//         case 4:
//         case 6:
//         case 9:
//         case 11:
//             days = 30;
//             break;
//         case 2:
//             days = 28;
//             break;
//         default:
//             return "Invalid month number!";
//     }
//     return days;
// }
// const result = getMonthDays();
// document.write(result);

// ---------------------------------------------

function findMaximum(num1, num2) {
  num1 = +prompt("Enter Te First Number");
  num2 = +prompt("Enter Te Second Number");
  let max;
  switch (true) {
    case num1 > num2:
      max = num1;
      break;
    case num2 > num1:
      max = num2;
      break;
    default:
      max = "Both numbers are equal";
      break;
  }
  return max;
}
document.write(findMaximum())


