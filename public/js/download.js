function downloadImage() {
  // hide all <a> tags within the table
  var table = document.getElementById("timetable");
  var links = table.getElementsByTagName("a");
  for (var i = 0; i < links.length; i++) {
    links[i].style.display = "none";
  }

  // generate the image and download it
  document.getElementById("download-btn").style.display = "none";
  html2canvas(table).then(function(canvas) {
    var link = document.createElement("a");
    document.body.appendChild(link);
    link.download = "timetable.png";
    link.href = canvas.toDataURL("image/png");
    link.target = '_blank';
    link.click();
  });

  // show all <a> tags within the table again
  for (var i = 0; i < links.length; i++) {
    links[i].style.display = "block";
  }
  document.getElementById("download-btn").style.display = "block";
}
