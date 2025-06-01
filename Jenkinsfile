pipeline {
    agent any
    stages {
        stage('Clone') {
            steps {
                echo 'Code already pulled by Jenkins using this Jenkinsfile.'
            }
        }
        stage('Build') {
            steps {
                echo 'This is the build step — put compile/test commands here.'
            }
        }
        stage('Deploy') {
            steps {
                echo 'Deploying to /var/www/html...'
                sh 'sudo cp -r * /var/www/html/'
            }
        }
    }
}
