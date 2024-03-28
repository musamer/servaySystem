document.addEventListener("DOMContentLoaded", function() {
    // alert('i am supervisor.js');
    const excelBtn = document.getElementById('excel_btn');
    if(excelBtn){
        excelBtn.addEventListener('click',exportToExcel);
    }
    

    function exportToExcel() {
        var table = document.getElementById("excelTable");
        var html = table.outerHTML;
    
        // Convert table to CSV format
        var csv = html.replace(/<[^>]+>/g, ";").replace(/&nbsp;/g, ";").replace(/ /g, ";").replace(/\r\n|\r|\n/g, "\r\n");
    
        // Create a blob with UTF-8 encoding
        var blob = new Blob([new Uint8Array([0xEF, 0xBB, 0xBF]), csv], { type: "text/csv;charset=utf-8;" });
    
        // Create a temporary anchor element
        var link = document.createElement("a");
        if (link.download !== undefined) { // feature detection
            // Create a link to the file
            var url = URL.createObjectURL(blob);
            link.setAttribute("href", url);
            link.setAttribute("download", "table.csv");
    
            // Append the link to the body
            document.body.appendChild(link);
    
            // Trigger the click event
            link.click();
    
            // Clean up
            document.body.removeChild(link);
        } else {
            alert("Your browser does not support the download functionality. Please try again in a different browser.");
        }
    }
    
    
  // add click event to all btn in head of sections of report page to open/close
  const btns = document.querySelectorAll(".btns");
  btns.forEach(function (btn) {
    btn.addEventListener("click", function () {
      const sec = document.getElementById(btn.getAttribute("sec"));
    //   console.log(btn);
      if (sec.classList.contains("d-none")) {
        sec.classList.remove("d-none");
        btn.textContent=String.fromCharCode(11167);
      } else {
        sec.classList.add("d-none");
        btn.textContent=String.fromCharCode(11164);
      }
    });
  });
    
    
});
