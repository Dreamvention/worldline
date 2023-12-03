<?php
// Heading
$_['heading_title']		 						= 'Worldline';

// Text
$_['text_worldline']		 					= '<img src="view/image/payment/worldline.svg" alt="Worldline" title="Worldline" />';
$_['text_extensions']   						= 'Estensioni';
$_['text_edit']        							= 'Modifica Worldline';
$_['text_version']								= 'Disponibile la nuova versione Worldline. Puoi scaricarlo <a href="%s" target="_blank" class="alert-link">qui</a>!';
$_['text_tab_account']				 			= 'Impostazioni dell\'account';
$_['text_tab_advanced']				 			= 'Impostazioni avanzate';
$_['text_tab_order_status']						= 'Lo stato dell\'ordine';
$_['text_tab_transaction']						= 'Transazioni';
$_['text_tab_suggest']							= 'Suggerisci una nuova funzionalità';
$_['text_live']   								= 'Vivere';
$_['text_test']   								= 'Test';
$_['text_api_credential_alert']					= 'Per recuperare la API Key e l\'API Secret nel tuo PSPID, segui questi passaggi:<br />1) Accedi al Back Office<br />2) Vai a Configuration > Technical information > Ingenico Direct Settings > Direct API Key<br / >3) Se non hai ancora configurato nulla, la schermata mostra "No API credentials found". Per creare sia API Key che API Secret clicca su "GENERATE"';
$_['text_webhook_credential_alert']				= 'Per recuperare le credenziali dei webhook, attenersi alla seguente procedura:<br />1) Accedere al Back Office<br />2) Andare su Configuration > Technical information > Ingenico Direct settings > Webhooks Configuration<br />3) Fare clic su "GENERATE WEBHOOKS API KEY"<br />4) Copia e incolla immediatamente il WebhooksKeySecret<br />5) In "Endpoints URLs", incolla Webhook URL del tuo negozio<br />5) Fai clic su "SAVE" per confermare le impostazioni';
$_['text_pre_authorization']   					= 'Pre Autorizzazione';
$_['text_final_authorization']   				= 'Finale Autorizzazione';
$_['text_sale']   								= 'Vendita';
$_['text_no_preference']						= 'Nessuna preferenza';
$_['text_no_challenge_requested']				= 'Nessuna sfida richiesta';
$_['text_challenge_requested']					= 'Sfida richiedere';
$_['text_challenge_required']					= 'Sfida necessario';
$_['text_exemption_none']						= 'Nessuna segnalazione di esenzione';
$_['text_exemption_automatic']					= 'Migliore esenzione automatica possibile';
$_['text_exemption_transaction_risk_analysis']	= 'La transazione è a basso rischio';
$_['text_exemption_low_value']					= 'Il valore della transazione è inferiore a 30 EUR';
$_['text_exemption_whitelist']					= 'Autorizzato dal cliente';
$_['text_created_status']						= 'Stato creato';
$_['text_cancelled_status']						= 'Stato annullato';
$_['text_rejected_status']						= 'Stato rifiutato';
$_['text_pending_status']						= 'Stato in sospeso';
$_['text_captured_status']						= 'Stato catturato';
$_['text_refunded_status']						= 'Stato rimborsato';
$_['text_created']								= 'Creato';
$_['text_cancelled']							= 'Annullato';
$_['text_rejected']								= 'Respinto';
$_['text_rejected_capture']						= 'Cattura rifiutata';
$_['text_pending_capture']						= 'In attesa di cattura';
$_['text_captured']								= 'Catturato';
$_['text_refunded']								= 'Rimborsato';
$_['text_authorization_requested']				= 'Autorizzazione richiesta';
$_['text_capture_requested']					= 'Cattura richiesta';
$_['text_refund_requested']						= 'Rimborso richiesto';
$_['text_suggest_subject']						= 'Suggerisci una nuova funzionalità';
$_['text_suggest_version']						= 'OpenCart %s. Worldline %s.';
$_['text_transaction_created']					= 'La transazione è stata creata ed è ancora in stato in sospeso.';
$_['text_transaction_cancelled']				= 'La transazione/autorizzazione è stata annullata dal tuo cliente o da te stesso.';
$_['text_transaction_rejected']					= 'La richiesta di autorizzazione/rimborso è stata respinta dall\'acquirente.';
$_['text_transaction_rejected_capture']			= 'La richiesta di cattura è stata respinta dall\'acquirente.';
$_['text_transaction_pending_capture']			= 'La richiesta di autorizzazione è andata a buon fine, ma è comunque necessario acquisirla per ricevere i fondi.';
$_['text_transaction_captured']					= 'La richiesta di cattura è andata a buon fine. Puoi aspettarti di ricevere i fondi per questa transazione dal tuo acquirente.';
$_['text_transaction_refunded']					= 'La richiesta di rimborso è andata a buon fine. Il tuo cliente può aspettarsi di ricevere i fondi per questa transazione dai suoi emittenti.';
$_['text_transaction_authorization_requested']	= 'Worldline sta elaborando la richiesta di autorizzazione e attende il risultato.';
$_['text_transaction_refund_requested']			= 'Worldline sta elaborando la richiesta di rimborso e attende il risultato.';
$_['text_transaction_capture_requested']		= 'Worldline sta elaborando la richiesta di cattura e attende il risultato.';
$_['text_payment_information']					= 'Informazioni sul pagamento';
$_['text_transaction_id']						= 'ID della transazione';
$_['text_transaction_status']					= 'Stato della transazione';
$_['text_transaction_description']				= 'Descrizione della transazione';
$_['text_payment_product']						= 'Metodo di pagamento';
$_['text_total']								= 'Totale';
$_['text_amount']								= 'Importo pagato';
$_['text_currency_code']						= 'Valuta';
$_['text_date']									= 'Data';
$_['text_environment']							= 'Ambiente';
$_['text_card_bin']								= 'BIN di carta';
$_['text_card_number']							= 'Numero di carta';
$_['text_transaction_action']					= 'Azione';
$_['text_fraud_information']					= 'Informazioni sulle frodi';
$_['text_fraud_result']							= 'Risultato della frode';
$_['text_liability']							= 'Responsabilità per 3DS';
$_['text_exemption']							= 'Esenzione';
$_['text_authentication_status']				= 'Stato di autenticazione';

// Entry
$_['entry_environment']							= 'Ambiente';
$_['entry_merchant_id']							= 'Merchant ID (PSPID)';
$_['entry_api_key']								= 'API Key';
$_['entry_api_secret']							= 'API Secret';
$_['entry_api_endpoint']						= 'API Endpoint';
$_['entry_webhook_key']							= 'Webhook Key';
$_['entry_webhook_secret']						= 'Webhook Secret';
$_['entry_merchant_id_test']					= 'Test Merchant ID (PSPID)';
$_['entry_api_key_test']						= 'Test API Key';
$_['entry_api_secret_test']						= 'Test API Secret';
$_['entry_api_endpoint_test']					= 'Test API Endpoint';
$_['entry_webhook_key_test']					= 'Test Webhook Key';
$_['entry_webhook_secret_test']					= 'Test Webhook Secret';
$_['entry_webhook_url']   						= 'Webhook URL';
$_['entry_cron_url']	  						= 'Cron URL';
$_['entry_status']       						= 'Stato';
$_['entry_title']								= 'Titolo di pagamento';
$_['entry_button_title']						= 'Titolo del pulsante di pagamento';
$_['entry_authorization_mode']					= 'Modalità di autorizzazione';
$_['entry_challenge_indicator']					= 'Indicatore di sfida 3DS';
$_['entry_exemption_request']					= 'Richiesta di esenzione 3DS';
$_['entry_group_cards']							= 'Carte di gruppo';
$_['entry_debug']				 				= 'Registrazione di debug';
$_['entry_total']		 						= 'Totale';
$_['entry_geo_zone']     						= 'Zona geografica';
$_['entry_sort_order']   						= 'Ordinamento';
$_['entry_order_id']							= 'ID ordine';
$_['entry_transaction_id']						= 'ID della transazione';
$_['entry_transaction_status']					= 'Transaction Status';
$_['entry_payment_product']						= 'Stato della transazione';
$_['entry_amount']								= 'Importo pagato';
$_['entry_currency']							= 'Valuta';
$_['entry_date_from']							= 'Data da';
$_['entry_date_to']								= 'Data a';
$_['entry_company_name']   						= 'Nome della ditta';
$_['entry_message']   							= 'Messaggio';

// Help
$_['help_total']         						= 'Il totale che deve essere raggiunto per abilitare questo metodo di pagamento.';
$_['help_webhook_url']		  					= 'Imposta i webhook nel Back Office di Worldline per chiamare questo URL.';
$_['help_cron_url']		  						= 'Imposta un cron per chiamare questo URL.';
$_['help_company_name']          				= 'Il nome della tua azienda.';
$_['help_message']          					= 'Spiega come il nostro plugin di pagamento può essere ulteriormente migliorato.';

// Column
$_['column_order_id']							= 'ID ordine';
$_['column_transaction_id']						= 'ID della transazione';
$_['column_transaction_status']					= 'Stato della transazione';
$_['column_payment_product']					= 'Payment Method';
$_['column_total']								= 'Total';
$_['column_amount']								= 'Importo pagato';
$_['column_currency_code']						= 'Valuta';
$_['column_date']								= 'Data';
$_['column_environment']						= 'Ambiente';
$_['column_action']								= 'Azione';

// Button
$_['button_save']  								= 'Salva';
$_['button_sign_up']							= 'Crea un account/Registrati';
$_['button_contact_us']							= 'Contattaci';
$_['button_reset_api_endpoint']					= 'Reimposta API Endpoint';
$_['button_copy_url']							= 'Copia l\'URL negli appunti';
$_['button_filter']								= 'Filtra';
$_['button_send_suggest']						= 'Invia';
$_['button_capture']							= 'Catturare';
$_['button_cancel']								= 'Annulla';
$_['button_refund']								= 'Rimborso';
$_['button_title']								= 'Paga con Worldline';

// Success
$_['success_save']								= 'Successo: hai modificato Worldline!';
$_['success_send_suggest']						= 'Successo: le tue informazioni sono state inviate con successo a Worldline!';
$_['success_capture']							= 'La transazione è stata catturata.';
$_['success_cancel']							= 'La transazione/autorizzazione è stata annullata.';
$_['success_refund']							= 'La transazione è stata rimborsata.';

// Error
$_['error_warning']          					= 'Attenzione: controllare attentamente il modulo per eventuali errori!';
$_['error_permission'] 							= 'Attenzione: non hai il permesso di modificare il pagamento Worldline!';
$_['error_merchant_id']          				= 'Merchant ID non è corretto!';
$_['error_api_key']          					= 'API Key non è corretto!';
$_['error_api_secret']          				= 'API Secret non è corretto!';
$_['error_webhook_key']          				= 'Webhook Key non è corretto!';
$_['error_webhook_secret']          			= 'Webhook Secret non è corretto!';
$_['error_merchant_id_test']          			= 'Test Merchant ID non è corretto!';
$_['error_api_key_test']          				= 'Test API Key non è corretto!';
$_['error_api_secret_test']          			= 'Test API Secret non è corretto!';
$_['error_webhook_key_test']          			= 'Test Webhook Key non è corretto!';
$_['error_webhook_secret_test']          		= 'Test Webhook Secret non è corretto!';
$_['error_company_name']          				= 'Il nome dell\'azienda deve contenere da 3 a 32 caratteri!';
$_['error_message']          					= 'Il messaggio deve contenere tra 20 e 1000 caratteri!';