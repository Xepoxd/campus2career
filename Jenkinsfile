pipeline {
    agent any
    environment {
        AWS_DEFAULT_REGION = 'us-east-1'  // Replace with your AWS region
    }
    stages {
        stage('Clone GitHub Repo') {
            steps {
                checkout scm
            }
        }
        stage('Build') {
            steps {
                echo 'Building project...'
                // Add your build commands here (e.g., npm install, mvn clean install, etc.)
            }
        }
        stage('Deploy to AWS') {
            steps {
                echo 'Deploying to AWS...'
                withCredentials([usernamePassword(credentialsId: 'aws-jenkins-credentials', usernameVariable: 'AWS_ACCESS_KEY_ID', passwordVariable: 'AWS_SECRET_ACCESS_KEY')]) {
                    script {
                        // Set the AWS environment variables
                        sh '''
                        export AWS_ACCESS_KEY_ID=$AWS_ACCESS_KEY_ID
                        export AWS_SECRET_ACCESS_KEY=$AWS_SECRET_ACCESS_KEY
                        export AWS_DEFAULT_REGION=$AWS_DEFAULT_REGION

                        # Example deployment script using AWS CLI:
                        aws s3 cp ./build/ s3://your-s3-bucket-name/ --recursive
                        '''
                    }
                }
            }
        }
    }
    post {
        success {
            echo 'Deployment successful!'
        }
        failure {
            echo 'Deployment failed.'
        }
    }
}
