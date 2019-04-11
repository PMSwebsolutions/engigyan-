var mainVm;
$(document).ready(function(){
    mainVm = new applyViewModel();
    ko.applyBindings(mainVm);
});


function applyViewModel(){
    var self = this;
    self.name = ko.observable('');
    self.company = ko.observable('');
    self.investment = ko.observable('');
    self.phone = ko.observable('');
    self.address = ko.observable('');
    self.state = ko.observable();
    self.city = ko.observable();
    self.pincode = ko.observable();
    self.apply = function(){
        var dataString = 'name=' + self.name() + '&company=' + self.company() + '&investment=' + self.investment() + '&phone=' + self.phone() + '&address=' + self.address() + '&state=' + self.state() + '&city=' + self.city() + '&pincode=' + self.pincode();
        $.ajax({
            type: "POST",
            url: "apply.php",
            data: dataString,
            cache: false,
            success: function(data) {                        
                    
               if(data == "success"){
                   alert("Application submitted sucessfully.");
                   window.location = "index.html";
               }else{
                   alert("Enter proper values in the field below");
                   
               }
                alert(data)
            },
            error: function(){
                alert("Error not possible");
            }
        });
    };
}