verificaLogado = function() {
	var nick = Base64.decode($.cookie('miUser'));
    if (nick != null) {
      $('.box-dadoscliente').addClass('x-logado');
      $('.endereco').addClass('x-logado');
      
      $('.endereco .k-peronalData').removeClass('desabilitado');
      $('.endereco .save-step').removeClass('desabilitado');
      $('.endereco .content-form').removeClass('x-inativo');
      $('.endereco .x-edit').hide();

      //$('.box-formaentrega .k-peronalData').removeClass('desabilitado');
      //$('.box-formaentrega .content-form').removeClass('x-inativo');
    };
};

validateEmail = function(sEmail) {
    var filter = /^([\w-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([\w-]+\.)+))([a-zA-Z]{2,4}|[0-9]{1,3})(\]?)$/;
    if (filter.test(sEmail)) {
        return true;
    }
    else {
        return false;
    };
};

hidePopUp = function() {
	$('.modal').each(function(event) {
		$(this).find('.close').click(function() {
			$(this).closest('.modal').hide();
		});
	});
};

showPopUp = function() {
	$('.x-open-modal').each(function() {
		var popup = $(this).find('a');
		var divShow = $(this).find('a').attr("href");
		$(popup).click(function() {
			console.log("entrou open modal!")
			$(divShow).show();
			return false;
		});
	});
};

onlyNumber = function(){
	$(".x-only-number").keydown(function (e) {
        if ($.inArray(e.keyCode, [46, 8, 9, 27, 13, 110, 190]) !== -1 ||
            (e.keyCode == 65 && ( e.ctrlKey === true || e.metaKey === true ) ) || 
            (e.keyCode >= 35 && e.keyCode <= 40)) {
                 return;
        }
        if ((e.shiftKey || (e.keyCode < 48 || e.keyCode > 57)) && (e.keyCode < 96 || e.keyCode > 105)) {
            e.preventDefault();
        }
    });
};

acaoValidateEmail = function() {
    $('#email').keypress(function() {
        var sEmail = $('#email').val();
        if (validateEmail(sEmail)) {
            
            $('#email').removeClass('x-block-cadastro');
        }
        else {
            
            $('#email').addClass('x-block-cadastro');
        };
    });

    $('.valida-email').keypress(function() {
        var sEmail = $(this).val();
        if (validateEmail(sEmail)) {
            
            $('.k-bx-login #register').removeClass('x-hide');
        }
        else {
            
            $('.k-bx-login #register').addClass('x-hide');
        }
    });
};

validaCampos = function() {
	$('.campo-obr').each(function() {

        $(this).keypress(function() {

        	var sEmail = $('#email').val();
	        if (validateEmail(sEmail)) {
	            $('#email').removeClass('x-block-cadastro');
	        }
	        else {
	            $('#email').addClass('x-block-cadastro');
	            $('.k-email').find('.k-field-error-message').removeClass('x-hide-alert-email');
	        };

            if ($(this).val() == "") {
                $(this).addClass('x-block-cadastro');
            }
            else {
                
                $(this).removeClass('x-block-cadastro');
            };

        });
	});

};

nextInput = function() {
	$("input").keyup(function () {
	    if (this.value.length == this.maxLength) {
	      $(this).next('input').focus();
	    }
	});
};

dadosPessoaisAcoes = function() {

	$('input.checkbox').attr("checked", "checked");
	//$('#cpf').mask('000.000.000-00');
	//$('#birthdate').mask('99/99/9999');

	$('.dadoscliente').each(function() {

		$('#confirmeSenha').keypress(function() { 
	        var senha = $('#senha').val();
	        var confimaSenha = $(this).val();

	        if (confimaSenha == senha)  {
	        	$(this).removeClass('x-block-cadastro');
	        }

	        else {
	        	$(this).addClass('x-block-cadastro');
	        };
	    });

		$(this).find('.campo-obr').each(function() {
			$(this).keypress(function() {

				if ($(this).next('.k-field-error-message').is(":visible") || $(this).val() == "") {
	    			$(this).addClass('x-block-cadastro');
				}
				else {
	    			$(this).removeClass('x-block-cadastro');
				}
			});
		});

		$(this).find('.save-step').click(function() {

			$('.dadoscliente .k-field-error-message').each(function() {
				if ($(this).is(":visible") || $(this).closest('li').find('.campo-obr').val() == "") {
	    			$(this).closest('li').find('.campo-obr').addClass('x-block-cadastro');
				}
				else {
	    			$(this).closest('li').find('.campo-obr').removeClass('x-block-cadastro');
				}
			});

			if ($('.dadoscliente .x-block-cadastro').length) { 
				$('.dadoscliente .x-block-cadastro').each(function() {
	                var nome = $(this).attr("title");
	                $('.dadoscliente .x-alert').show();
	                $('.dadoscliente .x-alert').html("Preencha o campo " + nome + "!");
	                return false;
		        });
			}

			else {
				$('.dadoscliente .x-alert').hide();
				$('.box-dadoscliente .k-peronalData').addClass('desabilitado');
				$('.box-dadoscliente .content-form').addClass('x-inativo');
				$('.endereco .content-form').removeClass('x-inativo');
				$('.endereco .k-peronalData').removeClass('desabilitado');
				$('.box-dadoscliente .x-edit').show();
			};
			
		});

		$('.box-dadoscliente .x-edit').click(function() {
			$(this).hide();
			$('.box-dadoscliente .content-form').removeClass('x-inativo');
			$('.box-dadoscliente .k-peronalData').removeClass('desabilitado');
		});

	});
};


enderecoEntregaAcoes = function() {
	
	$('.endereco').each(function() {

		$('.endereco #cepComplement').keyup(function() {
			
			if ($(this).val().length > 2) {
				$('.endereco .x-autocomplete').removeClass('hide');
			};
		});

		$('.endereco #cepComplement').blur(function() {
			if ($('.endereco #cep').val().length == 5 && $(this).val().length == 3) {
				if ($(this).siblings('.k-field-error-message:last').is(':visible')) {
					
				} else {
					
					$('.endereco .x-autocomplete').removeClass('hide');
				}
			}
			else {
				$('.endereco  .x-autocomplete').addClass('hide');
			};
		});

		$(this).find('.x-save-endereco').click(function() {

			$('.endereco .k-field-error-message').each(function() {
				if ($(this).is(":visible") || $(this).closest('li').find('.campo-obr').val() == "") {
	    			$(this).closest('li').find('.campo-obr').addClass('x-block-cadastro');
	    			$(this).closest('li').find('.x-erro').show();
				}
				else {
	    			$(this).closest('li').find('.campo-obr').removeClass('x-block-cadastro');
	    			$(this).closest('li').find('.x-erro').hide();
				}
			});

			if ($('.endereco .x-block-cadastro').length) { 
				$('.endereco .x-block-cadastro').each(function() {
	                var nome = $(this).attr("title");
	                $('.endereco .x-alert').show();
	                $('.endereco .x-alert').html("Preencha o campo " + nome + "!");
	                return false;
		        });
			}

			else {
				$('.endereco .x-alert').hide();
				$('.endereco .content-form').hide();
				$('.box-formaentrega .content-form').removeClass('x-inativo');
				$('.box-formaentrega .k-peronalData').removeClass('desabilitado');
				$('.endereco .x-edit').show();
			};
			
		});

		$('.save-step.x-logado').click(function() {
			$('.endereco .x-alert').hide();
			$('.endereco .k-peronalData').addClass('desabilitado');
			$('.endereco .content-form').hide();
			$('.box-formaentrega .content-form').removeClass('x-inativo');
			$('.box-formaentrega .k-peronalData').removeClass('desabilitado');
			$('.endereco .x-edit').show();
		});

		$(this).find('.x-edit').click(function() {
			$(this).hide();
			$('.endereco .content-form').show();
			$('.endereco .x-resume-infos').hide();
			$('.endereco .x-endereco-cobranca').show();
			$('.endereco .k-peronalData').removeClass('desabilitado');
		});
		
	});
};


formaDeEntregaAcoes = function() {
	$('.box-formaentrega').each(function() {

		$(this).find('.save-step').click(function() {
			$('.box-formaentrega .k-peronalData').addClass('desabilitado');
			$('.box-formaentrega .content-form').addClass('x-inativo');
			$('.box-pagamento .content-form').removeClass('x-inativo');
			$('.box-pagamento .k-peronalData').removeClass('desabilitado');
			$('.box-formaentrega .x-edit').show();
		});

		$(this).find('.x-edit').click(function() {
			$(this).hide();
			$('.box-formaentrega .content-form').removeClass('x-inativo');
			$('.box-formaentrega .k-peronalData').removeClass('desabilitado');
		});

	});
};

pagamentoFinaliza = function() {
	$('.box-pagamento .x-alert').hide();
	$('.box-pagamento .k-peronalData').addClass('desabilitado');
	$('.box-pagamento .content-form').addClass('x-inativo');
	$('.box-resumopedido .finaliza-compra').removeClass('desabilitado');
	$('.box-resumopedido .finaliza-compra').addClass('x-active');
	$('.box-pagamento .x-edit').show();

	resumeInfos();
};

pagamentoAcoes = function() {
	$('.box-pagamento').each(function() {

		$(this).find('.k-creditCard').addClass('ng-hide');

		$(this).find('.x-edit').click(function() {
			$(this).hide();
			$('.box-pagamento .content-form').removeClass('x-inativo');
			$('.box-pagamento .k-peronalData').removeClass('desabilitado');
			$('.box-resumopedido .finaliza-compra').addClass('desabilitado');
			$('.box-resumopedido .finaliza-compra').removeClass('x-active');
		});

		$('.box-pagamento .bts-sales').click(function() {
			$('.box-pagamento .bts-sales').removeClass('x-active').hide();
			$(this).addClass('x-active').show();
		    $('.alterar-forma-pagamento').show();
		});

		$('.x-edit').click(function(){
			$('.x-infos-adicionais').hide();
		});

		$('.save-step .applyPayment').click(function(){
			$('.x-infos-adicionais').show();
		});

		$('.alterar-forma-pagamento').click(function(e){
		    e.preventDefault();
   			e.stopPropagation();
			$('.box-pagamento .bts-sales').show();
			$(this).hide();
			$('.k-paymentForm-bx fieldset').hide().removeClass("ng-hide");
			$('.save-step .applyPayment').attr('disabled','disabled');
			$('.k-creditCard .creditCardForm input, select').each(function(){
			   $(this).val(this.defaultValue);
			});
			$('.x-cartao.selected-card').addClass('ng-hide');
		});
		$('#cardnum123').keyup(function(){
			$('.x-cartao.selected-card').removeClass('ng-hide');
		});

		$('.box-pagamento .bts-sales-sel .x-cartao').click(function() {
			$('.box-pagamento .save-step').addClass('x-cartao-validate');
			$('.box-pagamento .save-step').removeClass('x-cartao-two-validate');
			$('.k-creditCard').removeClass('ng-hide').show();
			if($('.k-creditCard .qtParcel .parcels').attr("disabled", true)){
			  $('.save-step .applyPayment').attr("disabled", true);
			}
		});

		$('.box-pagamento .x-cartao-two').click(function() {
			$('.box-pagamento .save-step').addClass('x-cartao-two-validate');
			$('.box-pagamento .save-step').removeClass('x-cartao-validate');
		});

		$('.box-pagamento .x-boleto').click(function() {
			$('.box-pagamento .save-step').removeClass('x-cartao-validate');
			$('.box-pagamento .save-step').removeClass('x-cartao-two-validate');
		});

		$('.box-pagamento .debitList input').click(function() {
			$('.box-pagamento .save-step').removeClass('x-cartao-validate');
			$('.box-pagamento .save-step').removeClass('x-cartao-two-validate');
		});

		$(this).find('.save-step').click(function() {

			//CARTÃƒO DE CRÃ‰DITO UM CARTÃƒO
			if ($(this).hasClass('x-cartao-validate')) {
				
				$('.box-pagamento').on('click', '.x-cartao-validate', function(event) {
					event.preventDefault();
					console.log("CartÃ£o de crÃ©dito");
					$('.box-pagamento .k-creditCard .campo-obr').each(function() {
						if ($(this).val() == "") {
			    			$(this).addClass('x-block-cadastro');
						}
						else {
			    			$(this).removeClass('x-block-cadastro');   
						};
					});

					$('.box-pagamento .k-creditCard .k-cardNumber').each(function() {
						if ($(this).find('.k-field-error-message').is(':visible') || $(this).find('input').val() == "") {
							console.log('cartao invalido');
							$('.box-pagamento .k-creditCard .k-cardNumber input').addClass('x-block-cadastro');
						}
						else {
							$('.box-pagamento .k-creditCard .k-cardNumber input').removeClass('x-block-cadastro');
						}
					});

					$('.box-pagamento .k-creditCard .k-validate').each(function() {
						if ($(this).find('select').val() == "? undefined:undefined ?" || $(this).find('.k-field-error-message').is(":visible")) {
							$('.box-pagamento .k-creditCard .k-validate select').addClass('x-block-cadastro');
						}
						else {
							$('.box-pagamento .k-creditCard .k-validate select').removeClass('x-block-cadastro');
						};
					});

					if ($('.box-pagamento .k-creditCard .x-block-cadastro').length) { 
						$('.box-pagamento .k-creditCard .x-block-cadastro').each(function() {
			                var nome = $(this).attr("placeholder");
			                $('.box-pagamento .x-alert').show();
			                $('.box-pagamento .x-alert').html("Preencha o campo " + nome + "!");
			                return false;
				        });
					}

					else {
						pagamentoFinaliza();
					};
				
				});
			}
			
			else {

				//CARTÃƒO DE CRÃ‰DITO DOIS CARTÃ•ES
				if ($(this).hasClass('x-cartao-two-validate')) {
					$('.box-pagamento').on('click', '.x-cartao-two-validate', function(event) {
						event.preventDefault();
						console.log("2 CartÃµes de crÃ©dito");
						$('.box-pagamento .k-creditCard-two .campo-obr').each(function() {
							if ($(this).val() == "") {
				    			$(this).addClass('x-block-cadastro');
							}
							else {
				    			$(this).removeClass('x-block-cadastro');
							}
						});

						$('.box-pagamento .k-creditCard-two .k-validate').each(function() {
							if ($(this).find('select').val() == "? undefined:undefined ?" || $(this).find('.k-field-error-message').is(":visible")) {
								$('.box-pagamento .k-creditCard-two .k-validate select').addClass('x-block-cadastro');
							}
							else {
								$('.box-pagamento .k-creditCard-two .k-validate select').removeClass('x-block-cadastro');
							}
						});

						if ($('.box-pagamento .k-creditCard-two .x-block-cadastro').length) { 
							$('.box-pagamento .k-creditCard-two .x-block-cadastro').each(function() {
				                var nome = $(this).attr("placeholder");
				                $('.box-pagamento .x-alert').show();
				                $('.box-pagamento .x-alert').html("Preencha o campo " + nome + "!");
				                return false;
					        });
						}

						else {
							pagamentoFinaliza();
						};
					
					});
				}

				//BOLETO E DÃ‰BITO
				else {
					console.log("Boleto e dÃ©bito");
					pagamentoFinaliza();	
				};
				
			};
		});
		
		$('.box-pagamento').on('click', '.x-cartao-two', function() {
			$('.k-creditCard-two .creditCardForm').show();
		});

		$('.cardList').each(function() {
			$(this).find('label').click(function() {
				$(this).closest('.cardList').find('label').addClass('x-disable');
				$(this).removeClass('x-disable');
				$(this).closest('.cardList').next('.creditCardForm').show();
			});
		});
	});
};

tooltip = function() {
	$('.x-open-tooltip').hover(function() {
		$(this).next('.x-tooltip').removeClass('x-hide');
	}, function() {
		$(this).next('.x-tooltip').addClass('x-hide');
	});
};

hideBoleto = function() {
	$('.bts-sales-sel .x-boleto').click(function(){
	   $('fieldset.k-billet').show();
	});
};

resumeInfos = function() {

	$('.x-infos-adicionais .x-endereco').remove();
	$('.x-infos-adicionais .x-entrega').remove();
	$('.x-infos-adicionais .x-pagamento').remove();


	$('.enderecoInterno').each(function() {
		if ($('.x-infos-adicionais .x-endereco').length == 0) {
			var endereco = $.trim($(this).find('input:checked').closest('label').find('.x-address').text());

			if (endereco == "") {
				endereco = $('.endereco .k-address input').val() + " , " + $('.endereco .k-number input').val() + " - " + $('.endereco .k-district input').val() + " - " + $('.endereco .city input').val() + "/" + $('.endereco .state input').val();
			};

			$('.x-infos-adicionais ul').append('<li class="x-endereco"><span class="x-tit">Endereço de entrega</span> <span class="x-val">'+endereco+'</span> </li>');
		};
	});

	$('.peronalLogaded.address').each(function() {
		if ($('.x-infos-adicionais .x-entrega').length == 0) {
			var entrega = $.trim($('.seleciona-frete').find('option:selected').text());
			if ($('.seleciona-frete').find('option:selected').text().indexOf('Entrega Agendada') == 0) {
				var entrega = entrega + "<br/>" + $('.selc-ent').not('.seleciona-frete').find('option:selected').text();	
			}

			$('.x-infos-adicionais ul').append('<li class="x-entrega"><span class="x-tit">Forma de entrega</span> <span class="x-val">'+entrega+'</span> </li>');
		};
	});

	$('.box-pagamento').each(function() {
		if ($('.x-infos-adicionais .x-pagamento').length == 0) {
			var pagamento = $.trim($('.box-pagamento').find('.bts-sales.x-active').text());
			console.log("pagamento: " + pagamento);
			var condicao = "";
			if (pagamento == "Cartão de Crédito") {
				var cartao = $('.selected-card input').val();
				var parcelamento = $('.qtParcel .ng-binding').text().trim();
				condicao = cartao + " - " + parcelamento;
			};
			console.log("condicao: " + condicao);
			$('.x-infos-adicionais ul').append('<li class="x-pagamento"><span class="x-tit">Forma de Pagamento</span> <span class="x-val">'+ pagamento + " " + condicao +'</span> </li>');
		};
	});

};

$(document).ready(function(){
	hidePopUp();
	showPopUp();
	validaCampos();
	validateEmail();
	acaoValidateEmail();
	nextInput();
	dadosPessoaisAcoes();
	enderecoEntregaAcoes();
	formaDeEntregaAcoes();
	pagamentoAcoes();
	verificaLogado();
	onlyNumber();
	tooltip();
	hideBoleto();
});

 $(document).ajaxStop(function(){
 	verificaLogado();
 	onlyNumber();
 })