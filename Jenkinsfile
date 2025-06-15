pipeline {
    agent any
    environment {
        AWS_ACCESS_KEY_ID = 'your_aws_access_key_id'
        AWS_SECRET_ACCESS_KEY = 'your_aws_secret_access_key'
        AWS_DEFAULT_REGION = 'us-east-1'  // change if your AWS region is different
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
                sh '''
                # Your deployment script, for example, using AWS CLI:
                aws s3 cp ./build/ s3://your-s3-bucket-name/ --recursive
                # If you're using EC2 or other services, replace with your deployment commands
                '''
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
