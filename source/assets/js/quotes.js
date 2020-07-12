$("#target").click(function() {
  $.getJSON("/assets/js/quotes.json", function(data) {
    var htmlString = data[Math.floor(Math.random() * data.length)];
    $("#quote").text(htmlString["quote"]);
    $("#cite").text(htmlString["author"]);
  });
});
