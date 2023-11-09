<?php
// Heading
$_['heading_title']		 						= 'Worldline';

// Text
$_['text_worldline']		 					= '<img src="view/image/payment/worldline.svg" alt="Worldline" title="Worldline" />';
$_['text_extensions']   						= 'Extensions';
$_['text_edit']        							= 'Modifier Worldline';
$_['text_version']								= 'Nouvelle version Worldline disponible. Vous pouvez le télécharger <a href="%s" target="_blank" class="alert-link">ici</a> !';
$_['text_tab_account']				 			= 'Paramètres du compte';
$_['text_tab_advanced']				 			= 'Réglages avancés';
$_['text_tab_order_status']						= 'Statut de la commande';
$_['text_tab_transaction']						= 'Transactions';
$_['text_tab_suggest']							= 'Suggérer une nouvelle fonctionnalité';
$_['text_live']   								= 'Vivre';
$_['text_test']   								= 'Test';
$_['text_api_credential_alert']					= 'Pour récupérer la API Key et le API Secret dans votre PSPID, suivez ces étapes :<br />1) Connectez-vous au Back Office<br />2) Allez dans Configuration > Technical information > Ingenico Direct Settings > Direct API Key<br / >3) Si vous n\'avez encore rien configuré, l\'écran affiche "No API credentials found". Pour créer à la fois la API Key et le API Secret, cliquez sur "GENERATE"';
$_['text_webhook_credential_alert']				= 'Pour récupérer les identifiants des webhooks, suivez ces étapes :<br />1) Connectez-vous au Back Office<br />2) Allez dans Configuration > Technical information > Ingenico Direct settings > Webhooks Configuration<br />3) Cliquez sur "GENERATE WEBHOOKS API KEY"<br />4) Copiez et collez immédiatement le WebhooksKeySecret<br />5) Dans "Endpoints URLs", collez Webhook URL de votre boutique<br />5) Cliquez sur "SAVE" pour confirmer vos paramètres';
$_['text_pre_authorization']   					= 'Pré Autorisation';
$_['text_final_authorization']   				= 'Finale Autorisation';
$_['text_sale']   								= 'Vente';
$_['text_created_status']						= 'Statut créé';
$_['text_cancelled_status']						= 'Statut annulé';
$_['text_rejected_status']						= 'Statut rejeté';
$_['text_pending_status']						= 'Statut en attente';
$_['text_captured_status']						= 'Statut capturé';
$_['text_refunded_status']						= 'Statut remboursé';
$_['text_created']								= 'Créé';
$_['text_cancelled']							= 'Annulé';
$_['text_rejected']								= 'Rejeté';
$_['text_rejected_capture']						= 'Capture rejetée';
$_['text_pending_capture']						= 'En attente de capture';
$_['text_captured']								= 'Capturé';
$_['text_refunded']								= 'Remboursé';
$_['text_authorization_requested']				= 'Autorisation demandée';
$_['text_capture_requested']					= 'Capture demandée';
$_['text_refund_requested']						= 'Remboursement demandé';
$_['text_suggest_subject']						= 'Suggérer une nouvelle fonctionnalité';
$_['text_suggest_version']						= 'OpenCart %s. Worldline %s.';
$_['text_transaction_created']					= 'La transaction a été créée et est toujours en attente.';
$_['text_transaction_cancelled']				= 'La transaction/autorisation a été annulée soit par votre client, soit par vous-même.';
$_['text_transaction_rejected']					= 'La demande d\'autorisation/remboursement a été rejetée par l\'acquéreur.';
$_['text_transaction_rejected_capture']			= 'La demande de capture a été rejetée par l\'acquéreur.';
$_['text_transaction_pending_capture']			= 'La demande d\'autorisation a abouti, mais vous devez encore la capturer pour recevoir les fonds.';
$_['text_transaction_captured']					= 'La demande de capture a réussi. Vous pouvez vous attendre à recevoir les fonds pour cette transaction de votre acquéreur.';
$_['text_transaction_refunded']					= 'La demande de remboursement a abouti. Votre client peut s\'attendre à recevoir les fonds pour cette transaction de la part de ses émetteurs.';
$_['text_transaction_authorization_requested']	= 'Worldline traite la demande d\'autorisation et attend le résultat.';
$_['text_transaction_refund_requested']			= 'Worldline traite la demande de remboursement et attend le résultat.';
$_['text_transaction_capture_requested']		= 'Worldline traite la demande de capture et attend le résultat.';
$_['text_payment_information']					= 'Informations de paiement';
$_['text_transaction_id']						= 'ID de transaction';
$_['text_transaction_status']					= 'Statut de la transaction';
$_['text_transaction_description']				= 'Description de la transaction';
$_['text_payment_product']						= 'Mode de paiement';
$_['text_total']								= 'Total';
$_['text_amount']								= 'Le montant payé';
$_['text_currency_code']						= 'Devise';
$_['text_date']									= 'Date';
$_['text_environment']							= 'Environnement';
$_['text_card_bin']								= 'BIN de la carte';
$_['text_card_number']							= 'Numéro de carte';
$_['text_transaction_action']					= 'Action';
$_['text_fraud_information']					= 'Informations sur la fraude';
$_['text_fraud_result']							= 'Résultat de la fraude';
$_['text_liability']							= 'Responsabilité pour 3DS';
$_['text_exemption']							= 'Exemption';
$_['text_authentication_status']				= 'Statut d\'authentification';

// Entry
$_['entry_environment']							= 'Environnement';
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
$_['entry_status']       						= 'Statut';
$_['entry_title']								= 'Titre du paiement';
$_['entry_button_title']						= 'Titre du bouton de paiement';
$_['entry_authorization_mode']					= 'Mode d\'autorisation';
$_['entry_group_cards']							= 'Cartes de groupe';
$_['entry_debug']				 				= 'Journalisation du débogage';
$_['entry_total']		 						= 'Total';
$_['entry_geo_zone']     						= 'Zone géographique';
$_['entry_sort_order']   						= 'Classement';
$_['entry_order_id']							= 'Numéro de commande';
$_['entry_transaction_id']						= 'ID de transaction';
$_['entry_transaction_status']					= 'Statut de la transaction';
$_['entry_payment_product']						= 'Mode de paiement';
$_['entry_amount']								= 'Le montant payé';
$_['entry_currency']							= 'Devise';
$_['entry_date_from']							= 'Dater de';
$_['entry_date_to']								= 'Date de';
$_['entry_company_name']   						= 'Nom de l\'entreprise';
$_['entry_message']   							= 'Message';

// Help
$_['help_total']         						= 'Le montant total que la commande doit atteindre avant que ce mode de paiement ne devienne actif.';
$_['help_webhook_url']		  					= 'Configurez des webhooks dans le Back Office Worldline pour appeler cette URL.';
$_['help_cron_url']		  						= 'Définissez un cron pour appeler cette URL.';
$_['help_company_name']          				= 'Le nom de votre société.';
$_['help_message']          					= 'Veuillez expliquer comment notre plugin de paiement peut être encore amélioré.';

// Column
$_['column_order_id']							= 'Numéro de commande';
$_['column_transaction_id']						= 'ID de transaction';
$_['column_transaction_status']					= 'Statut de la transaction';
$_['column_payment_product']					= 'Mode de paiement';
$_['column_total']								= 'Total';
$_['column_amount']								= 'Le montant payé';
$_['column_currency_code']						= 'Devise';
$_['column_date']								= 'Date';
$_['column_environment']						= 'Environnement';
$_['column_action']								= 'Action';

// Button
$_['button_save']  								= 'Sauvegarder';
$_['button_sign_up']							= 'Créer un compte / S\'inscrire';
$_['button_contact_us']							= 'Contactez-nous';
$_['button_reset_api_endpoint']					= 'Réinitialiser API Endpoint';
$_['button_copy_url']							= 'Copier l\'URL dans le presse-papiers';
$_['button_filter']								= 'Filtrer';
$_['button_send_suggest']						= 'Envoyer';
$_['button_capture']							= 'Capturer';
$_['button_cancel']								= 'Annuler';
$_['button_refund']								= 'Remboursement';
$_['button_title']								= 'Payer avec Worldline';

// Success
$_['success_save']								= 'Succès: Vous avez modifié Worldline!';
$_['success_send_suggest']						= 'Succès: Vos informations ont été envoyées avec succès à Worldline!';
$_['success_capture']							= 'La transaction a été capturée.';
$_['success_cancel']							= 'La transaction/autorisation a été annulée.';
$_['success_refund']							= 'La transaction a été remboursée.';

// Error
$_['error_warning']          					= 'Attention: Veuillez vérifier attentivement le formulaire pour détecter les erreurs!';
$_['error_permission'] 							= 'Attention: Vous n\'avez pas la permission de modifier le paiement Worldline!';
$_['error_merchant_id']          				= 'Merchant ID est incorrect!';
$_['error_api_key']          					= 'API Key est incorrect!';
$_['error_api_secret']          				= 'API Secret est incorrect!';
$_['error_webhook_key']          				= 'Webhook Key est incorrect!';
$_['error_webhook_secret']          			= 'Webhook Secret est incorrect!';
$_['error_merchant_id_test']          			= 'Test Merchant ID est incorrect!';
$_['error_api_key_test']          				= 'Test API Key est incorrect!';
$_['error_api_secret_test']          			= 'Test API Secret est incorrect!';
$_['error_webhook_key_test']          			= 'Test Webhook Key est incorrect!';
$_['error_webhook_secret_test']          		= 'Test Webhook Secret est incorrect!';
$_['error_company_name']          				= 'Le nom de l’entreprise doit comporter entre 3 et 32 caractères!';
$_['error_message']          					= 'Le message doit comporter entre 20 et 1000 caractères!';