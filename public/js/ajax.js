window.addEventListener("load", atualizarTabelaFilme);
window.addEventListener("load", atualizarTabelaDiretor);
window.addEventListener("load", atualizarTabelaEstudio);
window.addEventListener("load", atualizarTabelaGenero);


// ------------------------------------------ FILME ----------------------------------------------------

function deletarFilme(iId){
    try {
        $.ajax({
            type: "delete",
            async: false,
            dataType: "json",
            url: "http://localhost:8000/api/filme/" + iId,
            success: function(oRetorno){
                atualizarTabelaFilme();
                console.log(oRetorno);
            }
        });
    } catch(oErro){
        console.log(oErro);
        alert("Erro ao Deletar");
    }
}

function atualizarTabelaFilme(){
    try {
        $.ajax({
            type: "get",
            async: false,
            dataType: "json",
            url: "http://localhost:8000/api/filme",
            success: function(oRetorno){
                console.log(oRetorno);
                let sHtml = "";

                oRetorno.forEach(element => {
                    sHtml += "<tr class='row'>";
                    sHtml += "<td class='col-1 center'>" + element.id + "</td>";
                    sHtml += "<td class='col-1'>" + element.nome + "</td>";
                    sHtml += "<td class='col-1'>" + element.ano + "</td>";
                    sHtml += "<td class='col-1'>" + element.fx_etaria + "</td>";
                    sHtml += "<td class='col-2'>" + element.gen_codigo + "</td>";
                    sHtml += "<td class='col-2'>" + element.dir_codigo + "</td>";
                    sHtml += "<td class='col-2'>" + element.est_id + "</td>";
                    sHtml += "<td class='col-2 center'>";
                    sHtml += "<a href=''>";
                    sHtml += "<i  class=\"btn btn-primary\"><span class=\"glyphicon glyphicon-refresh\">Update</span></i>";
                    sHtml += "</a>&nbsp;&nbsp;";
                    sHtml += "<a onclick='deletarFilme(" + element.id + ")'>";
                    sHtml += "<i class=\"btn btn-danger\"><span class=\"glyphicon glyphicon-remove\">Delete</span></i>";
                    sHtml += "</a>";
                    sHtml += "</td>";
                    sHtml += "</tr>";
                });

                $("#tabelaFilme").html(sHtml);
            }
        });
    } catch(oErro){
        console.log(oErro);
        alert("Erro ao Atualizar");
    }
}

$("#cadastrarFilme").on("click", function(event){
    event.preventDefault();

        let iId = $("#Id").val();
        let sNome = $("#Nome").val();
        let iAno = $("#Ano").val();
        let iFx_etaria = $("#Fx_etaria").val();
        let iGen_codigo = $("#Gen_codigo").val();
        let iDir_codigo = $("#Dir_codigo").val();
        let iEst_id = $("#Est_id").val();

    try {
        $.ajax({
            type: "post",
            async: false,
            dataType: "json",
            data: {
                Id: iId,
                Nome: sNome,
                Ano: iAno,
                Fx_etaria: iFx_etaria,
                Gen_codigo: iGen_codigo,
                Dir_codigo: iDir_codigo,
                Est_id: iEst_id
            },
            // url: "http://localhost:8000/api/filme/" + id,
            url: "http://localhost:8000/api/filme",
            success: function(oRetorno){
                window.location = "http://localhost:8000/inicial/ConsultarFilme";
            }
        });
    } catch(oErro){
        console.log(oErro);
        alert("Erro ao Cadastrar");
    }
});

// $("#atualizarFilme").on("click", function(id){
//         event.preventDefault();
    
//             let iId = $("#Id").val();
//             let sNome = $("#Nome").val();
//             let iAno = $("#Ano").val();
//             let iFx_etaria = $("#Fx_etaria").val();
//             let iGen_codigo = $("#Gen_codigo").val();
//             let iDir_codigo = $("#Dir_codigo").val();
//             let sEst_sigla = $("#Est_sigla").val();
                
//         try {
//             $.ajax({
//                 type: "post",
//                 async: false,
//                 dataType: "json",
//                 data: {
                    //     Id: iId,
                    //     Nome: sNome,
                    //     Ano: iAno,
                    //     Fx_etaria: iFx_etaria,
                    //     Gen_codigo: iGen_codigo,
                    //     Dir_codigo: iDir_codigo,
                    //     Est_sigla: sEst_sigla
                    // },
//                 url: "http://localhost:41121/api/filme/" + id,
//                 success: function(oRetorno){
//                     window.location = "http://localhost:41121/inicial/AtualizarFilme";
//                 }
//             });
//         } catch(oErro){
//             console.log(oErro);
//             alert("Erro ao atualizar");
//         }

// --------------------------------------- DIRETOR -------------------------------------------------------

function deletarDiretor(iId){
    try {
        $.ajax({
            type: "delete",
            async: false,
            dataType: "json",
            url: "http://localhost:8000/api/diretor/" + iId,
            success: function(oRetorno){
                atualizarTabelaDiretor();
                console.log(oRetorno);
            }
        });
    } catch(oErro){
        console.log(oErro);
        alert("Erro ao Deletar");
    }
}

function atualizarTabelaDiretor(){
        try {
            $.ajax({
                type: "get",
                async: false,
                dataType: "json",
                url: "http://localhost:8000/api/diretor",
                success: function(oRetorno){
                    console.log(oRetorno);
                    let sHtml = "";
    
                    oRetorno.forEach(element => {
                        sHtml += "<tr class='row'>";
                        sHtml += "<td class='col-2 center'>" + element.id + "</td>";
                        sHtml += "<td class='col-2 center'>" + element.est_id + "</td>";
                        sHtml += "<td class='col-2 center'>" + element.nome_dir + "</td>";
                        sHtml += "<td class='col-2 center'>" + element.idade + "</td>";
                        sHtml += "<td class='col-2 center'>";
                        sHtml += "<a href=''>";
                        sHtml += "<i  class=\"btn btn-primary\"><span class=\"glyphicon glyphicon-refresh\">Update</span></i>";
                        sHtml += "</a>&nbsp;&nbsp;";
                        sHtml += "<a onclick='deleta(" + element.Id + ")'>";
                        sHtml += "<i class=\"btn btn-danger\"><span class=\"glyphicon glyphicon-remove\">Delete</span></i>";
                        sHtml += "</a>";
                        sHtml += "</td>";
                        sHtml += "</tr>";
                    });
    
                    $("#tabelaDiretor").html(sHtml);
                }
            });
        } catch(oErro){
            console.log(oErro);
            alert("Erro ao Atualizar");
        }
    }

    
$("#cadastrarDiretor").on("click", function(event){
        event.preventDefault();
    
        let iId = $("#Id").val();
        let iEst_id = $("#Est_id").val();
        let sNome = $("#Nome").val();
        let iIdade = $("#Idade").val();        
    
        try {
            $.ajax({
                type: "post",
                async: false,
                dataType: "json",
                data: {
                    Id: iId,
                    Est_id: iEst_id,
                    Nome: sNome,
                    Idade: iIdade
                },
                url: "http://localhost:8000/api/diretor",
                success: function(oRetorno){
                    window.location = "http://localhost:8000/inicial/ConsultarDiretor";
                }
            });
        } catch(oErro){
            console.log(oErro);
            alert("Erro ao cadastrar");
        }
    }); 
        
// $("#atualizarDiretor").on("click", function(id){
            //     event.preventDefault();
            
            //      let iDir_codigo = $("#Dir_codigo").val();
            //      let sEst_sigla = $("#est_sigla").val();
            //      let sNome = $("#Nome").val();
            //      let iIdade = $("#Idade").val();  
            
            //     try {
            //         $.ajax({
            //             type: "post",
            //             async: false,
            //             dataType: "json",
            //             data: {
                        //     Dir_codigo: iDir_codigo,
                        //     Est_sigla: sEst_sigla,
                        //     Nome: sNome,
                        //     Idade: iIdade
                        // },
            //             url: "http://localhost:41121/api/diretor/" + id,
            //             success: function(oRetorno){
            //                 window.location = "http://localhost:41121/inicial/AtualizarDiretor";
            //             }
            //         });
            //     } catch(oErro){
            //         console.log(oErro);
            //         alert("Erro ao atualizar");
            //     }

// --------------------------------------- ESTUDIO -----------------------------------------------------

function deletarEstudio(iId){
    try {
        $.ajax({
            type: "delete",
            async: false,
            dataType: "json",
            url: "http://localhost:8000/api/estudio/" + iId,
            success: function(oRetorno){
                atualizarTabelaEstudio();
                console.log(oRetorno);
            }
        });
    } catch(oErro){
        console.log(oErro);
        alert("Erro ao Deletar");
    }
}

function atualizarTabelaEstudio(){
        try {
            $.ajax({
                type: "get",
                async: false,
                dataType: "json",
                url: "http://localhost:8000/api/estudio",
                success: function(oRetorno){
                    console.log(oRetorno);
                    let sHtml = "";
    
                    oRetorno.forEach(element => {
                        sHtml += "<tr class='row'>";
                        sHtml += "<td class='col-2 center'>" + element.id + "</td>";
                        sHtml += "<td class='col-2 center'>" + element.est_sigla + "</td>";
                        sHtml += "<td class='col-2 center'>" + element.est_nome + "</td>";
                        sHtml += "<td class='col-2 center'>";
                        sHtml += "<a href=''>";
                        sHtml += "<i  class=\"btn btn-primary\"><span class=\"glyphicon glyphicon-refresh\">Update</span></i>";
                        sHtml += "</a>&nbsp;&nbsp;";
                        sHtml += "<a onclick='deletarEstudio(" + element.id + ")'>";
                        sHtml += "<i class=\"btn btn-danger\"><span class=\"glyphicon glyphicon-remove\">Delete</span></i>";
                        sHtml += "</a>";
                        sHtml += "</td>";
                        sHtml += "</tr>";
                    });
    
                    $("#tabelaEstudio").html(sHtml);
                }
            });
        } catch(oErro){
            console.log(oErro);
            alert("Erro ao Atualizar");
        }
    }

    
$("#cadastrarEstudio").on("click", function(event){
        event.preventDefault();

        let iId = $("#Id").val();
        let sEst_sigla = $("#Est_sigla").val();
        let sEst_nome = $("#Est_nome").val();      
    
        try {
            $.ajax({
                type: "post",
                async: false,
                dataType: "json",
                data: {
                    Id: iId,
                    Est_sigla: sEst_sigla,
                    Est_nome: sEst_nome
                },
                url: "http://localhost:8000/api/estudio",
                success: function(oRetorno){
                    window.location = "http://localhost:41121/inicial/ConsultarEstudio";
                }
            });
        } catch(oErro){
            console.log(oErro);
            alert("Erro ao cadastrar");
        }
    }); 
        
// $("#atualizarEstudio").on("click", function(id){
            //     event.preventDefault();
            
            //      llet sEst_sigla = $("#Est_sigla").val();
            //      let sEst_nome = $("#Est_nome").val(); 
            
            //     try {
            //         $.ajax({
            //             type: "post",
            //             async: false,
            //             dataType: "json",
            //             data: {
            //                  Est_sigla: sEst_sigla,
            //                  Est_nome: sEst_nome
            //              },
            //             url: "http://localhost:41121/api/estudio/" + id,
            //             success: function(oRetorno){
            //                 window.location = "http://localhost:41121/inicial/AtualizarEstudio";
            //             }
            //         });
            //     } catch(oErro){
            //         console.log(oErro);
            //         alert("Erro ao atualizar");
            //     }

// --------------------------------------- GENERO -----------------------------------------------------

function deletarGenero(iId){
    try {
        $.ajax({
            type: "delete",
            async: false,
            dataType: "json",
            url: "http://localhost:8000/api/genero/" + iId,
            success: function(oRetorno){
                atualizarTabelaGenero();
                console.log(oRetorno);
            }
        });
    } catch(oErro){
        console.log(oErro);
        alert("Erro ao Deletar");
    }
}

function atualizarTabelaGenero(){
        try {
            $.ajax({
                type: "get",
                async: false,
                dataType: "json",
                url: "http://localhost:8000/api/genero",
                success: function(oRetorno){
                    console.log(oRetorno);
                    let sHtml = "";
    
                    oRetorno.forEach(element => {
                        sHtml += "<tr class='row'>";
                        sHtml += "<td class='col-2 center'>" + element.id + "</td>";
                        sHtml += "<td class='col-2 center'>" + element.descricao + "</td>";
                        sHtml += "<td class='col-2 center'>";
                        sHtml += "<a href=''>";
                        sHtml += "<i  class=\"btn btn-primary\"><span class=\"glyphicon glyphicon-refresh\">Update</span></i>";
                        sHtml += "</a>&nbsp;&nbsp;";
                        sHtml += "<a onclick='deletarGenero(" + element.id + ")'>";
                        sHtml += "<i class=\"btn btn-danger\"><span class=\"glyphicon glyphicon-remove\">Delete</span></i>";
                        sHtml += "</a>";
                        sHtml += "</td>";
                        sHtml += "</tr>";
                    });
    
                    $("#tabelaGenero").html(sHtml);
                }
            });
        } catch(oErro){
            console.log(oErro);
            alert("Erro ao Atualizar");
        }
    }

    
$("#cadastrarGenero").on("click", function(event){
        event.preventDefault();
    
        let iId = $("#Id").val();
        let sDescricao = $("#Descricao").val();      
    
        try {
            $.ajax({
                type: "post",
                async: false,
                dataType: "json",
                data: {
                    Id: iId,
                    Descricao: sDescricao
                },
                url: "http://localhost:8000/api/genero",
                success: function(oRetorno){
                    window.location = "http://localhost:8000/inicial/ConsultarGenero";
                }
            });
        } catch(oErro){
            console.log(oErro);
            alert("Erro ao cadastrar");
        }
    });
        
// $("#atualizarGenero").on("click", function(id){
            //     event.preventDefault();
            
            //   let iGen_codigo = $("#Gen_codigo").val();
            //   let sDescricao = $("#Descricao").val();      
            //     try {
            //         $.ajax({
            //             type: "post",
            //             async: false,
            //             dataType: "json",
            //             data: {
            //                  Gen_codigo: iGen_codigo,
            //                  Descricao: sDescricao
            //              },
            //             url: "http://localhost:41121/api/genero/" + id,
            //             success: function(oRetorno){
            //                 window.location = "http://localhost:41121/inicial/AtualizarGenero";
            //             }
            //         });
            //     } catch(oErro){
            //         console.log(oErro);
            //         alert("Erro ao atualizar");
            //     }

