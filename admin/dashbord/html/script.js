// Our labels along the x-axis
var years = ['มกราคม','กุมภาพันธุ์','มีนาคม','เมษายน','พฤษภาคม','มิถุนายน','กรกฏาคม','สิงหาคม','กันยายน','ตุลาคม','พฤษจิกายน','ธันวาคม'];
// For drawing the lines
var  n1 = [73,69,114,118,126,172,94,33,39,58,51,51];
var n2= [12,4,16,14,18,12,11,6,8,15,15,8];
var n3 = [8,3,9,10,13,10,10,2,1,3,5,4
];


var ctx = document.getElementById("myChart");
var myChart = new Chart(ctx, {
  type: 'line',
  data: {
    labels: years,
    datasets: [
      { 
        data: n1,
        label: "ปกติ",
        borderColor: "#3e95cd",
        fill: false
      },
      { 
        data: n2,
        label: "แง่บวก",
        borderColor: "#8e5ea2",
        fill: false
      },
      { 
        data: n3,
        label: "แง่ลบ",
        borderColor: "#3cba9f",
        fill: false
      }
      
    ]
  }
});