/* define your array of object literals here */

function Book(isbn, title, description, universities, link) {
  this.isbn = isbn;
  this.title = title;
  this.description = description;
  this.universities = universities;
  this.link = link;
}

var books = [
  new Book(
    "0132145375",
    "Database Processing: Fundamentals, Design, and Implementation",
    "Database Processing is a modern and comprehensive textbook that is suitable for all current undergraduate courses on database management. Its effective teaching approach aims to provide students with a clear understanding of the fundamental concepts of database processing. This textbook has been widely adopted by many educators.",
    [
      "University of Toronto",
      "University of Waterloo",
      "University of British Columbia",
    ],
    "https://www.pearson.com/en-us/subject-catalog/p/database-processing-fundamentals-design-and-implementation/P200000001375/9780136931577"
  ),
  new Book(
    "0133970744",
    "The Basics of Web Design: HTML5 & CSS3",
    "The Basics of Web Design: HTML5 & CSS3, 3rd Edition introduces HTML5 and CSS3 coding skills that are required to begin a career in web design. This market-leading textbook has been substantially revised to reflect changes to the HTML5 specification, making it the most current and accurate book on the market.",
    [
      "University of West Georgia",
      "Wake Forest University",
      "University of North Carolina at Chapel Hill",
    ],
    "https://www.pearson.com/en-us/subject-catalog/p/database-processing-fundamentals-design-and-implementation/P200000001375/9780136931577"
  ),
  new Book(
    "0132991292",
    "The Economic Way of Thinking",
    "The Economic Way of Thinking goes beyond explaining the basic principles of micro- and macroeconomic analysis by showing students a method of reasoning that teaches them how to apply these principles as tools. The authors expose students to a method of reasoning that makes them think like an economist through example and application and also shows them how not to think, by exposing errors in popular economic reasoning.",
    [
      "Rhode Island College",
      "Jackson State University",
      "Eastern Michigan University",
    ],
    "https://www.pearson.com/en-us/subject-catalog/p/database-processing-fundamentals-design-and-implementation/P200000001375/9780136931577"
  ),
  new Book(
    "0133485080",
    "Introduction to Engineering Analysis",
    "Introduction to Engineering Analysis has been written for engineering students who want to learn about problem solving using MATLAB. The textbook offers a hands-on approach to learning how to solve engineering analysis problems using MATLAB, and has been designed to be used in conjunction with an Engineering Analysis textbook.",
    [
      "Hillsdale College",
      "University of Alabama in Huntsville",
      "Georgia Southern University",
      "Edge Hill University",
    ],
    "https://www.pearson.com/en-us/subject-catalog/p/database-processing-fundamentals-design-and-implementation/P200000001375/9780136931577"
  ),
  new Book(
    "013336092X",
    "Starting Out with C++: Early Objects",
    "Starting Out with C++: Early Objects, 8th Edition covers procedural programming—control structures and methods—before objects and classes. This approach creates a strong foundation that gives students the confidence to work with object-oriented programming languages, such as C++, Java, and Swift.",
    [
      "University of California, Berkeley",
      "University of California, Los Angeles",
      "University of California, San Diego",
    ],
    "https://www.pearson.com/en-us/subject-catalog/p/database-processing-fundamentals-design-and-implementation/P200000001375/9780136931577"
  ),
];

Book.prototype.outputCard = function () {
  document.write(`
    <div class="mdl-cell mdl-card mdl-shadow--2dp">
      <div class="mdl-card__media">
        <img src="images/${this.isbn}.jpg" class="zoom" title="${this.title}">
      </div>
      <div class="mdl-card__supporting-text">
        <p>${this.description}</p>
        <h6>Adopters</h6>
        <ul>
          ${this.universities
            .map((university) => `<li>${university}</li>`)
            .join("")}
        </ul>
      </div>
      <div class="mdl-card__actions mdl-card--border">
          <a class="mdl-button" href=${this.link}>READ MORE</a>
      </div>
    </div> <!-- end card -->
  `);
};
