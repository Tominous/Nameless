<?php
/*
 *  Translations by Maiu | Discord: Maiu#1152
 *  https://github.com/NamelessMC/Nameless/
 *  NamelessMC versjon 2.0.0-pr3
 *
 *  License: MIT
 *
 *  Norsk oversettelse - Admin
 */

$language = array(
	/*
	 *  Admin Control Panel
	 */
	// Login
	're-authenticate' => 'Vennligst logg inn på nytt.',

	// Sidebar
	'dashboard' => 'Dashboard',
	'configuration' => 'Configuration',
	'layout' => 'Layout',
	'user_management' => 'User Management',
	'admin_cp' => 'AdminCP',
	'administration' => 'Administrasjon',
	'overview' => 'Oppsummering',
	'core' => 'Kjerne',
	'minecraft' => 'Minecraft',
	'modules' => 'Moduler',
	'security' => 'Sikkerhet',
	'sitemap' => 'Sitemap',
	'styles' => 'Stiler',
	'users_and_groups' => 'Brukere og grupper',

	// Overview
	'running_nameless_version' => 'Kjører NamelessMC versjon <strong>{x}</strong>', // Don't replace "{x}"
	'running_php_version' => 'Kjører PHP versjon <strong>{x}</strong>', // Don't replace "{x}"
	'statistics' => 'Statistikk',
	'registrations' => 'Registreringer',
	'topics' => 'Emner',
	'posts' => 'Tråder',
    'notices' => 'Varsler',
    'no_notices' => 'Ingen varsler.',
    'email_errors_logged' => 'En email error har blitt logget',

	// Core
	'settings' => 'Instillinger',
	'general_settings' => 'Generelle instillinger',
	'sitename' => 'Nettstedets navn',
	'default_language' => 'Standardspråk',
	'default_language_help' => 'Tilskuere på nettstedet kan benytte alle installerte språk',
	'install_language' => 'Install Language',
	'update_user_languages' => 'Update User Languages',
	'update_user_languages_warning' => 'This will update the language for all users on your site, even if they have already selected one!',
	'updated_user_languages' => 'User languages have been updated.',
	'installed_languages' => 'Installasjonen av språket var vellykket!',
	'default_timezone' => 'Standard tidssone',
	'registration' => 'Registrering',
	'enable_registration' => 'Vil du åpne for registrering?',
	'verify_with_mcassoc' => 'Verifiser bruker med MCAssoc-tillegget?',
	'email_verification' => 'Vil du kreve e-postverifikasjon av nye kontoer?',
	'homepage_type' => 'Forsidetype',
	'post_formatting_type' => 'Formatteringstype for poster',
	'portal' => 'Portal',
	'private_profiles' => 'Private Profiles',
	'missing_sitename' => 'Navnet på nettstedet må være mellom 2 og 64 tegn.',
	'missing_contact_address' => 'Please insert a contact email address between 3 and 255 characters long.',
	'use_friendly_urls' => 'Søkemotorvennlige URL-adresser',
	'use_friendly_urls_help' => 'VIKTIG! For at denne funksjonen skal fungere må du ha mod_rewrite og .htaccess tilgjengelig for web-serveren din. (Kun Apache2 er støttet for øyeblikket)',
	'config_not_writable' => '<strong>core/config.php</strong> er ikke skrivbar. Sjekk filens rettigheter og web-serverens tilgang. (www-data og chmod g+rw)',
	'settings_updated_successfully' => 'General settings updated successfully.',
	'social_media' => 'Sosiale medier',
	'youtube_url' => 'YouTube-URL',
	'twitter_url' => 'Twitter-URL',
	'twitter_dark_theme' => 'Bruk mørkt tema for Twitter-modulen?',
	'discord_id' => 'Discord Server ID',
	'discord_widget_theme' => 'Discord Widget Theme',
	'dark' => 'Dark',
	'light' => 'Light',
	'google_plus_url' => 'Google+ URL',
	'facebook_url' => 'Facebook-URL',
	'successfully_updated' => 'Vellykket endring i innstillinger!',
    'debugging_and_maintenance' => 'Feilsøk og vedlikehold',
	'debugging_settings_updated_successfully' => 'Debugging settings updated successfully.',
    'enable_debug_mode' => 'Tillatt feilsøkingsmodus?',
    'force_https' => 'Overstyr https?',
    'force_https_help' => 'Hvis aktivert, alle forespørsler på din nettside vil bli videresendt til https. Du må ha en gyldig SSL sertifikat aktiv for at dette skal funke.',
    'force_www' => 'Force www?',
    'contact_email_address' => 'Kontakt email adresse',
    'emails' => 'Email',
    'email_errors' => 'Email error',
    'registration_email' => 'Registreringsemail',
    'contact_email' => 'Kontaktemail',
    'forgot_password_email' => 'Glemt email passord',
    'unknown' => 'Ukjent',
    'delete_email_error' => 'Slett error',
    'confirm_email_error_deletion' => 'Er du sikker på at du vil slette denne erroren?',
    'viewing_email_error' => 'Viser error',
    'unable_to_write_email_config' => 'Kunne ikke skrive til filen <strong>core/email.php</core>. Vennligst sjekk filpermisjonen.',
    'enable_mailer' => 'Aktiver PHPMailer?',
    'enable_mailer_help' => 'Aktiver denne funksjonen hvis mailene ikke blir sendt automatisk. Bruk av PHPMailer krever at du har tilgang til foreksempel Gmail eller en SMTP støtter.',
    'outgoing_email' => 'Utgående email adresser',
    'outgoing_email_info' => 'Dette er emailen NamelesMC vil bruke til å sende ut mails.',
    'mailer_settings_info' => 'De markerte feltene må være utfylt hvis du har PHPMailer aktivert. For mer informasjon om hvordan du fyller ut disse feltene, sjekk ut <a href="https://github.com/NamelessMC/Nameless/wiki/Setting-up-SMTP-with-Nameless-(e.g.-Gmail-or-Outlook)" target="_blank">wiki</a>.',
    'host' => 'Vert',
    'email_port' => 'Port',
    'email_password_hidden' => 'Passordet vises ikke på grunn av sikkerhetsmessige årsaker.',
    'send_test_email' => 'Send test email',
    'send_test_email_info' => 'Denne knappen vil prøve å sende en test email til din email adresse, <strong>{x}</strong>. Alle errorene som blir oppdaget, vil bli listet her.', // Don't replace {x}
    'send' => 'Send',
    'test_email_error' => 'Test email error:',
    'test_email_success' => 'Test email ble suksessfullt sendt!',
    'terms_error' => 'Pass på at dine betingelser og vilkår ikke er mer enn 100000 tegn.',
    'privacy_policy_error' => 'Please enter a privacy policy no longer than 100000 characters.',
    'terms_updated' => 'Vilkår har suksessfullt blitt oppdatert!',
    'avatars' => 'Avatarer',
    'allow_custom_avatars' => 'Tillatt egne avatarer?',
    'default_avatar' => 'Standard avatar',
    'custom_avatar' => 'Egen avatar',
    'minecraft_avatar' => 'Minecraft avatar',
    'minecraft_avatar_source' => 'Minecraft avatar source',
    'built_in_avatars' => 'Innebygd avatarservice',
    'minecraft_avatar_perspective' => 'Minecraft avatar perspektiv',
    'face' => 'Ansikt',
    'head' => 'Hode',
	'bust' => 'Bust',
    'select_default_avatar' => 'Velg en ny standard avatar:',
    'no_avatars_available' => 'Ingen avatarer for øyeblikket. Vennligst last opp et nytt bilde oppe først.',
    'avatar_settings_updated_successfully' => 'Avatar instillinger har blitt oppdatert',
    'navigation' => 'Navigasjon',
    'navbar_order' => 'Navigasjonsbar rekkefølge',
    'navbar_order_instructions' => 'Du kan gi hver ting et tall over 0 for å plassere i rekkefølge.',
    'navbar_icon' => 'Navbar Icon',
    'navbar_icon_instructions' => 'You can also add an icon to each navbar item here, for example using <a href="https://fontawesome.com/v4.7.0/" target="_blank" rel="noopener nofollow">Font Awesome</a>.',
    'navigation_settings_updated_successfully' => 'Navigation settings updated successfully.',
    'dropdown_items' => 'Dropdown Items',
    'enable_page_load_timer' => 'Aktiver side timer?',
    'google_recaptcha' => 'Aktiver Google reCAPTCHA?',
    'recaptcha_site_key' => 'reCAPTCHA nettsidenøkkel (Site key)',
    'recaptcha_secret_key' => 'reCAPTCHA hemmelig nøkkel (Secret key)',
    'registration_disabled_message' => 'Registrering deaktivert melding',
    'enable_nicknames_on_registration' => 'Tillatt kallenavn for nyregistrerte brukere?',
    'validation_promote_group' => 'Post-valideringsgruppe',
    'validation_promote_group_info' => 'Dette er gruppen brukeren vil bli forfremmet til når personen har verifisert kontoen sin.',
    'login_method' => 'Login Metode',
    'privacy_and_terms' => 'Privacy & Terms',

	// Reactions
	'icon' => 'Ikon',
	'type' => 'Type',
	'positive' => 'Positiv',
	'neutral' => 'Nøytral',
	'negative' => 'Negativ',
	'editing_reaction' => 'Redigerer reaksjon',
	'html' => 'HTML',
	'new_reaction' => '<i class="fa fa-plus-circle"></i> Ny reaksjon',
	'creating_reaction' => 'Oppretter ny reaksjon',
	'no_reactions' => 'There are no reactions yet.',
	'reaction_created_successfully' => 'Reaction created successfully.',
	'reaction_edited_successfully' => 'Reaction edited successfully.',
	'reaction_deleted_successfully' => 'Reaction deleted successfully.',
	'name_required' => 'A name is required',
	'html_required' => 'HTML is required',
	'type_required' => 'A type is required',
	'name_maximum_16' => 'The name must be no more than 16 characters',
	'html_maximum_255' => 'The HTML must be no more than 255 characters',
	'confirm_delete_reaction' => 'Are you sure you want to delete this reaction?',

	// Custom profile fields
	'custom_fields' => 'Egendefinerbare profilfelt',
	'new_field' => '<i class="fa fa-plus-circle"></i> Nytt felt',
	'editable' => 'Editable',
	'required' => 'Påkrevd',
	'public' => 'Synlig for offentligheten',
	'text' => 'Tekst',
	'textarea' => 'Tekstområde',
	'date' => 'Dato',
	'creating_profile_field' => 'Lager nytt profilfelt',
	'editing_profile_field' => 'Redigerer profilfelt',
	'field_name' => 'Feltnavn',
	'profile_field_required_help' => 'Påkrevde felt må fylles inn av en bruker.',
	'profile_field_public_help' => 'Offentlige bokser vil være synlig for alle tilskuere på nettstedet, med mindre nettstedsmoderatorene har skrudd av dette.',
	'profile_field_error' => 'Feltnavnet må være mellom 2 og 16 tegn langt.',
	'description' => 'Beskrivelse',
	'display_field_on_forum' => 'Synlig på forumet',
	'profile_field_forum_help' => 'Hvis "Synlig på forumet" er aktivert vil alle som bruker forumet kunne se feltet.',
	'profile_field_editable_help' => 'If enabled, users will have permission to edit the field in their profile settings.',
	'no_custom_fields' => 'There are no custom fields yet.',
	'profile_field_updated_successfully' => 'The profile field was updated successfully.',
	'profile_field_created_successfully' => 'The profile field was created successfully.',
	'profile_field_deleted_successfully' => 'The profile field was deleted successfully.',

	// Minecraft
	'enable_minecraft_integration' => 'Aktiver Minecraft-integrasjon',
    'mc_service_status' => 'Minecraft-tjenestens status',
    'service_query_error' => 'Kunne ikke hente tjenestestatus',
    'authme_integration' => 'AuthMe-integrasjon',
    'authme_integration_info' => 'Hvis AuthMe-integrasjonen er aktivert, vil brukere kun kunne registrere seg inne på serveren.',
   	'enable_authme' => 'Aktiver AuthMe-integrasjon',
    'authme_db_address' => 'IP-adresse for AuthMe (MySQL)',
    'authme_db_port' => 'Port for AuthMe (MySQL)',
    'authme_db_name' => 'Databasenavn for AuthMe (MySQL)',
    'authme_db_user' => 'Brukernavn for AuthMe (MySQL)',
    'authme_db_password' => 'Passord for AuthMe (MySQL)',
    'authme_hash_algorithm' => 'AuthMe hashing-algoritme',
    'authme_db_table' => 'Tabellen for AuthMe (MySQL)',
    'enter_authme_db_details' => 'Fyll inn databasekonfigurasjonsdataen for å koble sammen nettstedet og AuthMe.',
    'authme_password_sync' => 'Synkroniser brukerpassordet',
    'authme_password_sync_help' => 'Hvis denne funksjonen er aktivert vil en brukers passord automatisk oppdateres på nettstedet når brukeren endrer det inne i spillet.',
    'minecraft_servers' => 'Minecraft-servere',
    'account_verification' => 'Minecraft-kontoverifisering',
    'server_banners' => 'Server-bannere',
    'query_errors' => 'Spørrefeil',
    'add_server' => '<i class="fa fa-plus-circle"></i> Legg til en server',
    'no_servers_defined' => 'Ingen servere har blitt definert.',
    'query_settings' => 'Query innstillinger',
    'default_server' => 'Standard server',
    'no_default_server' => 'Ingen standardserver',
    'external_query' => 'Bruk ekstern query?',
    'external_query_help' => 'Hvis standardserver query ikke funker, aktiver denne funksjonen.',
    'adding_server' => 'Legger til en server',
    'server_name' => 'Serverens navn',
    'server_address' => 'Serverens adresse',
    'server_address_help' => 'Adressen er det samme som feltet du fyller inn for å logge på serveren.',
    'server_port' => 'Server Port',
    'parent_server' => 'Hovedserver',
    'parent_server_help' => 'En hovedserver er som oftest BungeeCorden som serveren er koblet til, hvis det finnes.',
    'no_parent_server' => 'Ingen hovedserver',
    'bungee_instance' => 'BungeeCord funksjon?',
    'bungee_instance_help' => 'Velg dette alternativet hvis serveren er en BungeeCord.',
    'server_query_information' => 'For at spillerlisten skal vises på nettsiden, <strong>må</strong> serveren ha \'enable-query\' alternativet aktivert på <strong>server.properties</strong> filen.',
    'enable_status_query' => 'Aktiver status query?',
    'status_query_help' => 'Hvis dette er aktivert, vil statussiden vise om serveren er online eller offline.',
    'enable_player_list' => 'Aktiver spillerliste?',
    'pre_1.7' => 'Minecraft versjon eldre enn 1.7?',
    'player_list_help' => 'Hvis dette er aktivert, vile statussiden vise de påloggede spillerne.',
    'server_query_port' => 'Server Query Port',
    'server_query_port_help' => 'This is the query.port option in your server\'s server.properties file, provided the enable-query option in the same file is set to true.',
    'server_name_required' => 'Skriv inn servernavnet.',
    'server_name_minimum' => 'Servernavnet må være minst 1 tegn.',
    'server_name_maximum' => 'Servernavnet må være maksimum 20 tegn.',
    'server_address_required' => 'Vennligst skriv inn serveradressen.',
    'server_address_minimum' => 'Serveradressen må være minst 1 tegn.',
    'server_address_maximum' => 'Serveradressen må være maks 64 tegn.',
    'server_port_required' => 'Vennligst skriv inn server porten',
    'server_port_minimum' => 'Porten må være minimum 2 tegn.',
    'server_port_maximum' => 'Porten må være maksimum 5 tegn.',
    'server_parent_required' => 'Velg en hovedserver',
    'query_port_maximum' => 'Server query porten må være maksimum 5 tegn.',
    'server_created' => 'Server suksessfullt lagd.',
    'confirm_delete_server' => 'Er du sikker på at du vil slette denne serveren?',
    'server_updated' => 'Server suksessfullt oppdatert!',
    'editing_server' => 'Endrer server',
    'server_deleted' => 'Serveren ble suksessfullt slettet.',
    'unable_to_delete_server' => 'Kunne ikke slette server.',
    'leave_port_empty_for_srv' => 'Du kan ha denne tom om porten er 25565, eller om du bruker en SRV record.',
    'viewing_query_error' => 'Ser på Query Error',
    'confirm_query_error_deletion' => 'Er du sikker på at du vil slette denne query erroren?',
    'no_query_errors' => 'Ingen query error har blitt lagret.',
    'new_banner' => '<i class="fa fa-plus-circle"></i> Ny banner',
    'purge_errors' => 'Rens alle error',
    'confirm_purge_errors' => 'Er du sikker på at du vil fjerne alle errorer?',
	'email_errors_purged_successfully' => 'Email errors have been purged successfully.',
	'error_deleted_successfully' => 'The error has been deleted successfully.',
	'no_email_errors' => 'No email errors logged.',
	'email_settings_updated_successfully' => 'Email settings have been updated successfully.',
	'content' => 'Content',
    'mcassoc_help' => 'mcassoc er en ekstern service som kan bli brukt for å verifisere deres Minecraft bruker de har registrert med. For å bruke denne funksjonen må du registrere deg for å motta en delt nøkkel <a href="https://mcassoc.lukegb.com/" target="_blank">her</a>.',
    'mcassoc_key' => 'mcassoc delt nøkkel (Shared key)',
    'mcassoc_instance' => 'mcassoc Instance Key',
    'mcassoc_instance_help' => '<a href="#" onclick="generateInstance();">Klikk for å generere en instance nøkkel</a>',
    'mcassoc_error' => 'Vennligst sjekk at du har skrevet inn nøkkelen korrekt, og at du har generert en riktig instance nøkkel.',
    'updated_mcassoc_successfully' => 'mcassoc instillinger suksessfullt oppdatert!',
    'force_premium_accounts' => 'Tving premium Minecraft brukere?',
    'banner_background' => 'Banner bakgrunn',
    'query_interval' => 'Query interval (i minutter, må være mellom 5 og 60)',
    'player_graphs' => 'Spillergrafer',
    'player_count_cronjob_info' => 'Du kan sette opp et cron job for å querye serveren hvert {x} minutt med denne kommandoen:',
    'status_page' => 'Enable status page?',

	// Modules
	'modules_installed_successfully' => 'Modulene er nå oppdatert',
	'enabled' => 'Aktivert',
	'disabled' => 'Deaktivert',
	'enable' => 'Aktiver',
	'disable' => 'Deaktiver',
	'module_enabled' => 'Modul aktivert.',
	'module_disabled' => 'Modul deaktivert.',
	'author' => 'Utgiver:',

	// Styles
	'templates' => 'Maler',
	'template_outdated' => 'Malen er kun kompatibel med NamelessMC versjon {x}, men du kjører versjon {y}', // Don't replace "{x}" or "{y}"
	'active' => 'Aktiv',
	'deactivate' => 'Ikke aktiv',
	'activate' => 'Aktiver',
	'warning_editing_default_template' => 'Advarsel! Denne malen bør ikke redigeres.',
	'images' => 'Bilder',
	'upload_new_image' => 'Last opp nytt bilde',
	'reset_background' => 'Tilbakestill bakgrunnen',
	'install' => '<i class="fa fa-plus-circle"></i> Installer',
	'template_updated' => 'Malen er nå oppdatert!',
	'default' => 'Standard',
	'make_default' => 'Gjør til standardmal',
	'default_template_set' => 'Din standardmal er nå {x}.', // Don't replace {x}
	'template_deactivated' => 'Mal deaktivert.',
	'template_activated' => 'Mal aktivert.',
	'permissions' => 'Tilganger',
	'setting_perms_for_x' => 'Instillingspermisjoner for mal {x}', // Don't replace {x}
	'templates_installed_successfully' => 'Alle nye maler har blitt installert.',
	'confirm_delete_template' => 'Er du sikker på at du vil slette denne malen?',
	'delete' => 'Slett',
	'template_deleted_successfully' => 'Mal suksessfullt slettet.',
    'background_image_x' => 'Bakgrunnsbilde: <strong>{x}</strong>', // Don't replace {x}

	// Users & groups
	'users' => 'Brukere',
	'groups' => 'Grupper',
	'group' => 'Gruppe',
	'new_user' => '<i class="fa fa-plus-circle"></i> Ny bruker',
	'creating_new_user' => 'Opprettet ny bruker.',
	'registered' => 'Registrert',
	'user_created' => 'Bruker opprettet.',
	'cant_delete_root_user' => 'Du kan ikke slette Admin-brukeren!',
	'cant_modify_root_user' => 'Du kan ikke redigere Admin-gruppen!',
	'user_deleted' => 'Bruker slettet.',
	'confirm_user_deletion' => 'Er du sikker på at du vil slette brukeren <strong>{x}</strong>?', // Don't replace {x}
	'validate_user' => 'Gyldig bruker',
	'update_uuid' => 'Oppdater UUID',
	'update_mc_name' => 'Oppdater Minecraft-brukernavn',
	'reset_password' => 'Gjenoprett passord',
	'punish_user' => 'Gi brukeren en straff',
	'delete_user' => 'Slett brukeren',
	'minecraft_uuid' => 'Minecraft UUID',
	'other_actions' => 'Andre valg',
	'disable_avatar' => 'Deaktiver avatar',
	'select_user_group' => 'Du må velge brukerens gruppe.',
	'uuid_max_32' => 'UUID må være maksimum 32 tegn.',
	'title_max_64' => 'Brukernavnet kan maksimum være 64 tegn.',
	'group_id' => 'Gruppe ID',
	'name' => 'Navn',
	'title' => 'Bruker tittel',
	'new_group' => '<i class="fa fa-plus-circle"></i> Ny gruppe',
	'group_name_required' => 'Vennligst skriv inn et gruppenavn.',
	'group_name_minimum' => 'Pass på at gruppenavnet er minst 2 tegn.',
	'group_name_maximum' => 'Pass på at gruppenavnet er maks 20 tegn.',
	'creating_group' => 'Lager ny gruppe',
	'group_html_maximum' => 'Pass på at gruppens HTML ikke er lengre enn 1024 tegn.',
	'group_html' => 'Gruppe HTML',
	'group_html_lg' => 'Gruppe HTML Stor',
	'group_username_colour' => 'Gruppe brukernavnfarge',
	'group_staff' => 'Er denne gruppa en staff gruppe?',
	'group_modcp' => 'Har denne gruppa tilgang til ModCP?',
	'group_admincp' => 'Har denne gruppa tilgang til AdminCP?',
	'delete_group' => 'Slett gruppe',
	'confirm_group_deletion' => 'Er du sikker på at du vil slette gruppa {x}?', // Don't replace {x}
	'group_not_exist' => 'Den gruppa eksisterer ikke.',
	'secondary_groups' => 'Undergrupper',
	'secondary_groups_info' => 'Denne brukeren vil få all tilgang som denne gruppen har.',
	'unable_to_update_uuid' => 'Kan ikke oppdatere UUID.',
	'default_group' => 'Er denne gruppen standardgruppen (for nye brukere)?',
	'user_id' => 'User ID',
	'uuid' => 'UUID',

	// Permissions
	'select_all' => 'Velg alle',
	'deselect_all' => 'Fjern markering',
	'background_image' => 'Bakgrunnsbilde',
	'can_edit_own_group' => 'Kan ikke endre egen gruppes permisjoner.',
	'permissions_updated_successfully' => 'Permisjoner suksessfullt oppdatert.',
	'cant_edit_this_group' => 'Du kan ikke endre på denne gruppens permisjoner!',

	// General Admin language
	'task_successful' => 'Kapittel ferdig.',
	'invalid_action' => 'Ugyldig valg.',
	'enable_night_mode' => 'Aktiver nattmodus',
	'disable_night_mode' => 'Deaktiver nattmodus',
	'view_site' => 'Vis side',
	'signed_in_as_x' => 'Logget inn som {x}', // Don't replace {x}
	'warning' => 'Advarsel',

	// Maintenance
	'maintenance_mode' => 'Vedlikeholdsmodus',
	'maintenance_enabled' => 'Vedlikeholdsmodus er aktivert.',
	'enable_maintenance_mode' => 'Aktiver vedlikeholdsmodus??',
	'maintenance_mode_message' => 'Vedlikeholdsmelding',
	'maintenance_message_max_1024' => 'Pass på at vedlikeholdsmeldingen er maks 1024 tegn',

	// Security
	'acp_logins' => 'AdminCP Logg inns',
	'please_select_logs' => 'Velg logs du vil vise.',
	'ip_address' => 'IP Addresser',
	'template_changes' => 'Template forandringer',
	'file_changed' => 'File endringer',
	'all_logs' => 'All Logs',
	'action' => 'Action',
	'action_info' => 'Action Info',

	// Updates
	'update' => 'Oppdater',
	'current_version_x' => 'Denne versjonen: <strong>{x}</strong>', // Don't replaec {x}
	'new_version_x' => 'Ny versjon:: <strong>{x}</strong>', // Don't replace {x}
	'new_update_available' => 'Det er en ny oppdatering tilgjengelig',
	'new_urgent_update_available' => 'There is a new urgent update available. Please update as soon as possible!',
	'up_to_date' => 'Din NamelessMC kjører den nyeste versjonen!',
	'urgent' => 'Denne oppdateringen er en midlertidig versjon.',
	'changelog' => 'Oppdateringshistorikk',
	'update_check_error' => 'Det oppsto en feil under søket:',
	'instructions' => 'Instruksjoner',
	'download' => 'Last ned',
	'install_confirm' => 'Pass på at du har lastet opp filene først!',

	// Widgets
	'widgets' => 'Widgets',
	'widget_enabled' => 'Widget aktivert.',
	'widget_disabled' => 'Widget deaktivert.',
	'editing_widget_x' => 'Redigerer widget {x}', // Don't replace {x}
	'module_x' => 'Modul: {x}', // Don't replace {x}
	'widget_order' => 'Widget Order',

    // Online users widget
    'include_staff_in_user_widget' => 'Include staff members in user widget?',

    // Custom Pages
    'pages' => 'Sider',
    'custom_pages' => 'Sider',
    'new_page' => '<i class="fa fa-plus-circle"></i> Ny side',
    'no_custom_pages' => 'Ingen sider har blitt laget enda.',
    'creating_new_page' => 'Oppretter side',
    'page_title' => 'Side tittel',
    'page_path' => 'Side path (with preceding /, eg /example)',
    'page_icon' => 'Side ikon',
    'page_link_location' => 'Side link plassering',
    'page_link_navbar' => 'Navigasjonsbar',
    'page_link_footer' => 'Footer',
    'page_link_more' => '"Mer" Dropdown',
    'page_link_none' => 'Ingen link',
    'page_content' => 'Side innhold',
    'page_redirect' => 'Side Redirect?',
    'page_redirect_to' => 'Redirect lenke (med følgende start http://)',
    'unsafe_html' => 'Tillatt usikker HTML?',
    'unsafe_html_warning' => 'Ved å aktivere denne funksjonen vil all HTML kunne bli brukt på siden, også skadelig JavaScript. Bruk kun om du er sikker på at det er trygt.',
    'include_in_sitemap' => 'Include in sitemap?',
    'page_permissions' => 'Siden permisjoner',
    'view_page' => 'Se side?',
    'editing_page_x' => 'Redigerer side {x}', // Don't replace {x}
    'unable_to_create_page' => 'Kunne ikke opprette side:',
    'page_title_required' => 'En side tittel er påkrevd.',
    'page_url_required' => 'En side path er påkrevd.',
    'link_location_required' => 'En link plassering er påkrevd.',
    'page_title_minimum_2' => 'Side tittelen må være minst 2 tegn.',
    'page_url_minimum_2' => 'Siden pathen må være minst 2 tegn.',
    'page_title_maximum_30' => 'Side tittelen må være maks 30 tegn.',
    'page_icon_maximum_64' => 'Side iconet må være maks 64 tegn.',
    'page_url_maximum_20' => 'Side pathen må være maks 20 tegn.',
    'page_content_maximum_100000' => 'Sideinnholdet må være maks 100000 tegn.',
    'page_redirect_link_maximum_512' => 'Sideredirecten må være maks 512 tegn.',
    'confirm_delete_page' => 'Er du sikker på at du vil slette denne siden?',

    // API
    'api' => 'API',
    'enable_api' => 'Aktiver API?',
    'api_info' => 'APIen tillater plugins og andre servicer til å kommunisere med nettsiden din, for eksempel <a href="https://namelessmc.com/resources/resource/5-namelessplugin/" target="_blank" >den offisielle Nameless pluginen</a>.',
    'enable_legacy_api' => 'Aktiver legacy API?',
    'legacy_api_info' => 'Legacy APIen tillatter plugins som bruker Nameless versjon 1 APIen til å fungere med din versjon 2 nettside.',
    'confirm_api_regen' => 'Er du sikker på at du vil regenere API nøkkelen din?Are you sure you want to regenerate your API key?',
	'api_key' => 'API Key',
	'api_url' => 'API URL',
	'copy' => 'Copy',
	'api_key_regenerated' => 'The API key has been regenerated successfully.',
    'api_registration_email' => 'API RegistreringsemailAPI Registration Email',
	'show_registration_link' => 'Show registration link',
	'registration_link' => 'Registration Link',
    'link_to_complete_registration' => 'Link for å fullføre registrering: {x}', // Don't replace {x}
    'api_verification' => 'Enable API verification?',
    'api_verification_info' => 'If enabled, accounts can only be verified through the API, for example ingame using the official Nameless plugin. <strong>This option will override email verification, and accounts will be automatically activated!</strong><br />You should set up your default group to have limited permissions, and then update the post-validation group in the AdminCP -> Core -> Registration tab to the full member group with normal permissions.',
    'enable_username_sync' => 'Enable username sync?',
    'enable_username_sync_info' => 'If enabled, website usernames will be updated to match ingame usernames.',
	'api_settings_updated_successfully' => 'API settings updated successfully.',

	// File uploads
	'drag_files_here' => 'Dra filene hit for å laste opp.',
	'invalid_file_type' => 'Ugyldig filtype.',
	'file_too_big' => 'Filen er for stor! Din fil var {{filesize}} og maksimum er {{maxFilesize}}', // Don't replace {{filesize}} or {{maxFilesize}}
	'allowed_proxies' => 'Allowed Proxies',
	'allowed_proxies_info' => 'Line separated list of allowed proxy IPs.',

	// Error logs
	'error_logs' => 'Error Logg',
	'notice_log' => 'Varsler logg',
	'warning_log' => 'Advarselslog',
	'custom_log' => 'Egendefinert logg',
	'other_log' => 'Andre logg',
	'fatal_log' => 'Fatale logg',
	'log_file_not_found' => 'Logg fil ikke funnet.',
	'log_purged_successfully' => 'The log has been purged successfully.',

	// Hooks
	'discord_hooks' => 'Discord Hooks',
	'discord_hooks_info' => 'Send en melding til en Discord kanal når noe skjer på nettsiden din. Gå til Discord Server Settings -> Webhooks tab.',
	'discord_hook_url' => 'Discord webhook URL',
	'discord_hook_events' => 'Aktivert Discord hook events (Ctrl+klikk for å velge forskjellge eventer)',
	'register_hook_info' => 'Brukerregistrering',
	'validate_hook_info' => 'Brukerverifisering',

	// Sitemap
	'unable_to_load_sitemap_file_x' => 'Unable to load sitemap file {x}', // Don't replace {x}
	'sitemap_generated' => 'Sitemap generated successfully',
	'sitemap_not_writable' => 'The <strong>cache/sitemaps</strong> directory is not writable.',
	'cache_not_writable' => 'The <strong>cache</strong> directory is not writable.',
	'generate_sitemap' => 'Generate Sitemap',
	'download_sitemap' => 'Download Sitemap',
	'sitemap_not_generated_yet' => 'A sitemap has not been generated yet!',
	'sitemap_last_generated_x' => 'The sitemap was last generated {x}', // Don't replace {x}

	// Page metadata
	'page_metadata' => 'Page Metadata',
	'metadata_page_x' => 'Viewing metadata for page {x}', // Don't replace {x}
	'keywords' => 'Keywords',
	'description_max_500' => 'The description must be at most 500 characters.',

	// Dashboard
	'total_users' => 'Total Users',
	'total_users_statistic_icon' => '<i class="fa fa-users"></i>',
	'recent_users' => 'New Users',
	'recent_users_statistic_icon' => '<i class="fa fa-users"></i>',
	'average_players' => 'Average Players',
	'nameless_news' => 'NamelessMC News',
	'unable_to_retrieve_nameless_news' => 'Unable to retrieve the latest news',
	'confirm_leave_site' => 'You are about to leave this site! Are you sure you want to visit <strong id="leaveSiteURL">{x}</strong>?', // don't replace {x} and make sure it has the id leaveSiteURL
	'server_compatibility' => 'Server Compatibility',
	'issues' => 'Issues',

	// Other
	'source' => 'Source',
	'support' => 'Support'
);
