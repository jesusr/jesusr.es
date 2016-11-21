export function config ($logProvider, toastrConfig, $translateProvider) {
  'ngInject';
  $translateProvider.translations('en', {
    CV: 'CV',
    Portfolio: 'Portfolio',
    Personal: 'Personal'
  });
  $translateProvider.preferredLanguage('en');
  // Enable log
  $logProvider.debugEnabled(true);

  // Set options third-party lib
  toastrConfig.allowHtml = true;
  toastrConfig.timeOut = 3000;
  toastrConfig.positionClass = 'toast-top-right';
  toastrConfig.preventDuplicates = true;
  toastrConfig.progressBar = true;
}
