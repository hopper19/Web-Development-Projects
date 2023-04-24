var likeCount = 0;
var dislikeCount = 0;

function likeFunction() {
  likeCount++;
  document.getElementById("result").innerHTML = "You liked this! " + likeCount + " people like this.";
    document.getElementById("result2").innerHTML = "You liked this! " + likeCount + " people like this.";

}

function dislikeFunction() {
  dislikeCount++;
  document.getElementById("result").innerHTML = "You disliked this! " + dislikeCount + " people dislike this.";
    document.getElementById("result2").innerHTML = "You disliked this! " + dislikeCount + " people dislike this.";

}
