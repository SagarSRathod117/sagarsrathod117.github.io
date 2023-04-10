// ******************************* 
// Module 4 Assignment Solution.
// Code By : Sagar S Rathod
// *******************************

(function () {
    var names = ["Yaakov", "John", "Jen", "Jason", "Paul", "Frank", "Larry", "Paula", "Laura", "Jim"];
    for (var i = 0; i < names.length; i++) {
        var firstLetter = names[i].charAt(0).toLowerCase();
        if (firstLetter === 'j') {
            byeSpeaker(names[i]);
        }
        else {
            helloSpeaker(names[i]);
        }
    }
})();


/* var names = ["Yaakov", "John", "Jen", "Jason", "Paul", "Frank", "Larry", "Paula", "Laura", "Jim"];
for (var i = 0; i < names.length; i++) {
  (names[i].charAt(0).toLowerCase() == 'j') ? console.log("GoodBye " + names[i]) : console.log("Hello " + names[i]);
} */