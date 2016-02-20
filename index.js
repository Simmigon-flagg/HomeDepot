function DIY () {
	name = "",
	budget = "",
	zip = "",
	job = ""
};

function pro () {
	this.cust_id = "",
	companyName = "",
	price = "",
	trade = "",
	zip = ""
};

function getInput() {
    var name = document.getElementById("name").value;
    var budget = document.getElementById("budget").value;
    var zip = document.getElementById("zip").value;
    var job = document.getElementById("job").value;
    var DIYperson = new DIY();
    DIYperson.name = name;
    DIYperson.budget = budget;
    DIYperson.zip = zip;
    DIYperson.job = job
    console.log(DIYperson);
}

function contactPro (companyName, price, trade, zip) {
  console.log('Creating Pro');
  var matchedPro =  new pro(); 
  matchedPro.companyName = companyName;
  matchedPro.price = price;
  matchedPro.trade = trade;
  matchedPro.zip = zip;
  document.getElementById("CompanyName").innerHTML = matchedPro.companyName;
  document.getElementById("Spent").innerHTML = matchedPro.price;
  document.getElementById("Trade").innerHTML = matchedPro.trade;
  document.getElementById("Zip").innerHTML = matchedPro.zip;
}





