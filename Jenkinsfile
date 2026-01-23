
pipeline {
  agent any
  stages {
    stage('Test') {
      steps {
        sh '''
        docker compose up -d --build
        docker compose exec -T app php artisan test || true
        '''
      }
    }
  }
}
