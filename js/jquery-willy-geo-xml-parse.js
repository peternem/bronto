// JavaScript Document

$(document).ready(function() {

$.ajax({
type: "GET",
url: "xml/willy-geo.xml",
dataType: "xml",
success: parseXml
});

function parseXml(xml) {
	
	$(xml).find("bike").each(function() {
		//Loops through each state & find's respective instance of city & id in the xml file
		$('#bikeModel').append($(this).find("model").text() );
			   
		//$(".alternate:even").css("background-color", "#F4F4F8");
		//$(".alternate:odd").css("background-color", "#EFF1F1");
		$(function(){
			//$("table#Citylist tr:even").addClass("evenrow");
			//$("table#Citylist tr:odd").addClass("oddrow");
		});
		$("#Citylist").append('<tr class="alternate">'+
			'<td>'+ $(this).find("size").text() +'</td>' +
			'<td>'+$(this).find("effectiveTTlength").text()+'</td>' +
			'<td>'+$(this).find("seatTube").text()+'</td>' +
			'<td>'+$(this).find("HeadTubeLength").text()+'</td>' +
			'<td>'+$(this).find("HeadTubeAngle").text()+'</td>' +
			'<td>'+$(this).find("SeatTubeAngle").text()+'</td>' +
			'<td>'+$(this).find("bbHeight").text()+'</td>' +
			'<td>'+$(this).find("bbDrop").text()+'</td>' +
			'<td>'+$(this).find("ChainStayLength").text()+'</td>' +			
			'</tr>');
			});
	}
});
