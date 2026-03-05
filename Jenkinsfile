pipeline {
    agent any

    stages {

        stage('Build Containers') {
            steps {
                sh 'docker-compose up -d --build'
            }
        }

        stage('Run Tests') {
            steps {
                sh 'docker-compose exec -T app php artisan test'
            }
        }

    }

    post {
        always {
            sh 'docker-compose down'
        }
    }
}
