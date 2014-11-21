// JavaScript Document

$(document).ready(function() {

$.ajax({
type: "GET",
url: "xml/paycheck-geo.xml",
dataType: "xml",
success: parseXml
});

function parseXml(xml) {
	
	$(xml).find("bike").each(function() {
					  
		$("#XMLDataTable").append('<tr class="alternate">'+
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
