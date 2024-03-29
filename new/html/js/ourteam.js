var doctors = [
	{
		Name: "Dr Jon Cafferky",
		Image: "http://www.collegesoccerpanels.com/wp-content/uploads/2014/04/headshot_male_290x281.png",
		Days: ["Mo", "Tu", "We", "Th", "Fr", "Sa", "Su"],
		Info: "Dr Cafferky is interested in all areas of family medicine. He is a Fellow of the Royal Australian College of General Practitioners (FRACGP). Dr Cafferky is a Graduate from the University of Queensland, and in 1992 completed the Family Medicine Program.  He has over 25 years experience  in both hospital and General Practice and is committed to providing high quality family health care.  Dr Cafferky commenced practice in Calamvale in 1998 and has an ongoing commitment to Calamvale and surrounding suburbs."
	},
	{
		Name: "Dr Marcel Safier",
		Image: "http://www.collegesoccerpanels.com/wp-content/uploads/2014/04/headshot_male_290x281.png",
		Days: ["Mo", "Tu", "We", "Th"],
		Info: "Dr Safier graduated from the University of Queensland in 1984 and gained a wide range of medical and surgical experiance in 5 years at the Royal Brisbane, QEII and Greenslopes Hospitals. Since 1990 he has worked in a number of southside medical practices and he is interested in all aspects of family medicine. He has considerable training and interest in the areas of blood pressure, diabetes and heart disease."
	},
	{
		Name: "Dr Dean Warmington",
		Image: "http://www.collegesoccerpanels.com/wp-content/uploads/2014/04/headshot_male_290x281.png",
		Days: ["Mo", "We", "Th", "Fr"],
		Info: "Dr Warmington achieved a Bachelor of Health Science at Griffith University on the Gold Coast, then graduated from medicine from University of QLD in 2002 and is a Fellow of the Royal Australian College of General Practitioners.  He is interested in all aspects of General Practice, in particular, musculoskeletal medicine and cardiology."
	},
	{
		Name: "Dr Mary Rose Joseph",
		Image: "http://www.collegesoccerpanels.com/wp-content/uploads/2014/04/headshot_male_290x281.png",
		Days: ["Mo", "Tu", "Th"],
		Info: "Dr Joseph graduated from the University of Queensland in 1982 and worked in hospitals in Brisbane, rural New South Wales and the UK before entering General Practice in 1987.  Mary Rose has wide experience in all aspects of family medicine, with particular interests in Women's Health, Paediatrics and skin cancers / minor surgery."
	},
	{
		Name: "Dr Violette Hanna",
		Image: "http://www.collegesoccerpanels.com/wp-content/uploads/2014/04/headshot_male_290x281.png",
		Days: ["Tu", "We", "Th", "Fr"],
		Info: "Dr Hanna graduated from the Alexandria University in Egypt in 1987, and has gained a wealth of experience in Egypt and Australia.  She is a Fellow of the RACGP and has been practising medicine in Australia since 2003. Dr Hanna has worked at the Prince Charles Hospital, as well as rural general practices throughout Queensland.  She is interested in all aspects of family care, with a particular interest and experience in women’s health."
	},
	{
		Name: "Dr Jan Milford",
		Image: "http://www.collegesoccerpanels.com/wp-content/uploads/2014/04/headshot_male_290x281.png",
		Days: ["Mo", "Th"],
		Info: "Dr Milford grew up in Queensland and is a graduate of The University of Queensland and a Fellow of the RACGP. She has worked at the Ipswich Hospital in a range of specialties. She is interested in all areas of family medicine, especially women’s health."
	},
	{
		Name: "Dr Sylvia Zlnkova",
		Image: "http://www.collegesoccerpanels.com/wp-content/uploads/2014/04/headshot_male_290x281.png",
		Days: ["Tu"],
		Info: "Dr Zlnkova graduated from the Comenius University in 2003 and then moved to Australia to work and live.  Dr Zlnkova did her hospital training at Logan Hospital.  She has sinced worked for 4 and a half years in general practice in Bargara and Bundaberg where she gained a wide variety of skills and experience in general practice.  Sylvia is interested in all areas of general practice and has a special interest in chronic disease management and women's health."
	}
];

var doctorElement = `<div class="col-xl-2 col-lg-3 col-md-4 col-sm-12"> 
	<div class="staff-image-container">
		<img class="staff-image" src="!!!URL!!!"></img>
	</div>
</div>
<div class="col-xl-4 col-lg-3 col-md-8 col-sm-12">
	<div class="staff-info">
		<div class="staff-name">!!!NAME!!!</div>
		<div class="staff-days">
			!!!DAYS!!!
		</div>
		<div class="staff-desc">!!!INFO!!!
		</div>
		<div class="staff-readmore">Read more</div>
	</div>
</div>`;
var dayElement = `<div class="calendar-stack">
  <i class="fa fa-calendar-o" aria-hidden="true"></i>
  <span class="calendar-day">!!!NAME!!!</span>
</div>`;

$(document).ready(function () {
	"use strict";
	
	var dString = "";
	for(var i = 0; i < doctors.length; i++) {
		var newDoctor = doctorElement;
		var d = doctors[i];
		newDoctor = newDoctor.replace("!!!URL!!!", d.Image);
		newDoctor = newDoctor.replace("!!!NAME!!!", d.Name);
		newDoctor = newDoctor.replace("!!!INFO!!!", d.Info);
		
		var days = "";
		for(var j = 0; j < d.Days.length; j++) {
			days += dayElement.replace("!!!NAME!!!", d.Days[j]);
		}
		dString += newDoctor.replace("!!!DAYS!!!", days) + "\n";
	}
	$("#doctorslist").html(dString);
	$(".staff-info").each(function(index, el) {
		$(el).find(".staff-readmore").click(function() {
			var c = $(el).find(".staff-desc");
			if(c.hasClass("more")) {
				c.removeClass("more");
			}
			else {
				$(".staff-desc").removeClass("more");
			c.addClass("more");
			}
		});
	});
	onScreenResize();
});
$(window).resize(function () {
	"use strict";
	setTimeout(onScreenResize, 1400);
});

function onScreenResize() {
	"use strict";
	$(".staff-readmore").removeClass("d-none");
	$(".staff-info").each(function(index, el) {
		var element = $(el).find(".staff-desc");
		var c = element
           .clone()
           .css({"max-height": 'unset', visibility: 'hidden', width: element.width()})
           .appendTo('body');

		if( c.height() <= element.height() ) {
			$(el).find(".staff-readmore").addClass("d-none");
		}

		c.remove();
	});
}
