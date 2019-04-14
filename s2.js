var colorpallete = ['primary', 'dark', 'success', 'danger', 'warning'];
var i = 0, j =0;
var printyr ='';

var txt1 = '<div class="swiper-slide"> <div class="alert alert-';
var txt2 = '" style="border-radius: 10px; role="alert"> <img src="';
var imgnum = 1;
var txt3 = '" width="60" height="60" class="rounded float-right" alt="..."> <h5 class="alert-heading">';
var txt4 = ' E'; var epinum = 1;
var epiname = ["With Ross' New Girlfriend", "With The Breast Milk", "Where Heckles Dies", "With Phoebe's Husband", "With Five Steaks And An Eggplant", "With The Baby On The Bus", "Where Ross Finds Out", "With The List", "With Phoebe's Dad", "With Russ", "With The Lesbian Wedding", "After The Superbowl, Part 1", "After The Superbowl, Part 2", "With The Prom Video", "Where Ross And Rachel... You Know", "Where Joey Moves Out", "Where Eddie Moves In", "Where Dr. Ramoray Dies", "Where Eddie Won't Go", "Where Old Yeller Dies", "One With The Bullies", "One With Two Parties", "With The Chicken Pox", "With Barry & Mindy's Wedding"];
var txt5 = '</h5>';

var des =  ["Rachel gets an unpleasant surprise when Ross returns home. Phoebe has varied success when cutting her friends' hair!",
            "Monica goes shopping with Julie and is too afraid to tell Rachel. After-shave salesman outperforms Joey on the job.",
            "The downstairs neighbor dies and bequeaths his strange possessions to Monica and Rachel.",
            "Everyone's surprised when Phoebe's husband shows up.",
            "When planning a birthday party for Ross, the six discover money is an issue in life, even among friends.",
            "Joey and Chandler accidentally leave Ben on a bus while babysitting. Phoebe gets replaced by a professional.",
            "Developments occur in Ross and Rachel's relationship. Chandler regrets asking Monica to help him lose weight.",
            "Rachel makes a painful discovery concerning Ross. Monica's new boss gives her an impossible task.",
            "Phoebe learns the surprising truth about her father. Ross makes Monica's Christmas party guests miserable.",
            "Joey accepts a great acting job. Rachel dates a guy who looks amazingly like Ross.",
            "Carol and Susan prepare for their wedding with help from an uncomfortable Ross.",
            "Ross visits Marcel in the San Diego Zoo and finds something. Joey has a date with a deranged fan.",
            "Rachel and Monica fight over a Herro. Chandler dates a girl he went to elementary school with, a surprising outcome.",
            "Monica's old home video elicits the true feelings Ross has for Rachel. Joey gives Chandler a gift.",
            "Rosschel encounter romantic obstacles. Monica falls for a handsome older doctor. Chandler and Joey have new chairs",
            "Monica's parents find out about her new boyfriend.",
            "Chandler gets a new roommate. A record company asks Phoebe to make a Smelly Cat music video.",
            "Joey's soap character looks set to be killed off after Joey makes some contentious remarks to a fan magazine.",
            "Chandler tries rid of his annoying new roommate. The girls discover a book on personal empowerment.",
            "Phoebe becomes depressed when it dawns on her that some movies don't end happily. Richard, Chandler and Joey goes basketball game.",
            "Chandler and Ross are intimidated by two bullies who take over sofa. Phoebe meets her long-lost family.",
            "Rachel gets a real surprise when her parents show up at her birthday party.",
            "Phoebe catches chicken pox. Rachel wants Ross to have sailor suit.",
            "Rachel goes at her ex-fiance's wedding. Monica's relationship jeopardized when the subject of children arised."];

var epiwatchnum = ['01','02','03','04','05','06','07','08','09','10','11','12-E13','12-E13','14','15','16','17','18','19','20','21','22','23','24'];
var epidownnum = ['01','02','03','04','05','06','07','08','09','10','11','12','13','14','15','16','17','18','19','20','21','22','23','24'];
var txt6 = '</div> </div>';

for(i = 0, j = 0; i < 24; i++, j++) {

    var imgloc = 'img/s(2)/s01e' + imgnum + '.png';

    var downbtn = '<a href="http://79.127.126.110/Serial/Friends/S02/Friends.S02.E' + epidownnum[i] + '.480p.mkv" style="margin: 5px;" class="btn btn-' + colorpallete[j] + '"><i class="material-icons">get_app</i> Download</a>';
    var watchbtn = '<a target="_BLANK" href="http://s8.bitdownload.ir/Series/friends/S01/Friends.S01E' + epiwatchnum[i] + '.720p.bitdownload.ir.mkv" style="margin: 5px;" class="btn btn-' + colorpallete[j] + '"><i class="material-icons">live_tv</i> Watch</a>';

    printyr += txt1 + colorpallete[j] + txt2 + imgloc + txt3 + txt4 + epinum + " The One " + epiname[i] + txt5 + des[i] + "<br>" + downbtn + watchbtn + txt6;
    document.getElementById("episodes").innerHTML = printyr;
    if(j+1 >= colorpallete.length) { j=-1; }
    epinum++; imgnum++;
}