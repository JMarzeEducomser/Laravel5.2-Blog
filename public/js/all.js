var formCreate=$("#form-create");$(document).on("click","#btn-agregar",function(){var r=formCreate.attr("action"),e=formCreate.serialize();$.ajax({url:r,method:"POST",dataType:"JSON",data:e}).done(function(r){window.location.href="{{ route('admin.tag.index') }}"}).fail(function(r){r.responseJSON.nombre?($(".wrapper-nombre").addClass("has-error"),$(".wrapper-nombre .help-block>strong").html(r.responseJSON.nombre)):($(".wrapper-nombre").removeClass("has-error"),$(".wrapper-nombre .help-block>strong").html(""))})}),$(".modal#create").on("show.bs.modal",function(r){$(this).find("form")[0].reset(),$(".help-block>strong").html(""),$(".has-error").removeClass("has-error")}),$(".modal#create").on("hidden.bs.modal",function(r){$(this).find("form")[0].reset(),$(".help-block>strong").html(""),$(".has-error").removeClass("has-error")}),$(document).on("click",".pagination a",function(r){r.preventDefault();var e=$(this).attr("href").split("?"),o=e[0],a=e[1];$.ajax({url:o,method:"GET",dataType:"JSON",data:a}).done(function(r){$(".content-ajax").html(r)})});
