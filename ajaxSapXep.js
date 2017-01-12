$(document).ready(function(){
	$(".chon").on("change",function(){
		var id = $(".chon").val();
		var lsp=getQueryString()["lsp"];
		var hsx=$('input[type="radio"]:checked').val();
		console.log(lsp);
		var datas = {id:id,lsp:lsp,hsx:hsx};
		$.ajax({
			url:"SanPhamSX.php",
			method:"get",
			data:datas,
			success:function(data){
				
				$("#div_Danh_Sach_San_Pham").html(data);
			},
			error:function(data){
				alert("false");
			}
		}); 
	})
})
$(document).ready(function(){
	$(".check").click(function(){
		var id = $(".chon").val();
		var hsx = $('input[type="radio"]:checked').val();
		var lsp=getQueryString()["lsp"];
		console.log(lsp);
		var datas = {id:id,lsp:lsp,hsx:hsx};
		$.ajax({
			url:"SanPhamSX.php",
			method:"get",
			data:datas,
			success:function(data){
				
				$("#div_Danh_Sach_San_Pham").html(data);
			},
			error:function(data){
				alert("false");
			}
		});
	})
})
$(document).ready(function(){
	$(".btnSearch").click(function(){
		var key = $("#search").val();
		window.location.href="TimKiem.php?key="+key;
	})
})
/*$(document).ready(function(){
	$(".checkg").click(function(){
		var gia = $('input[type="radio"]:checked').val();
		alert(gia);
		$.get("SanPhamSX.php", {gia: gia}, function(data){
			$("#div_Danh_Sach_San_Pham").html(data);
		})
	})
})*/
function getQueryString()
{
    var vars = [], hash;
    var hashes = window.location.href.slice(window.location.href.indexOf('?') + 1).split('&');
    for(var i = 0; i < hashes.length; i++)
    {
        hash = hashes[i].split('=');
        vars.push(hash[0]);
        vars[hash[0]] = hash[1];
    }
    return vars;
}
// case get getQueryString()["name"]