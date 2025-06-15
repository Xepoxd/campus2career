pipeline {
    agent any
    environment {
        AWS_DEFAULT_REGION = 'us-east-1'
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
                // Add your build commands here, for example:
                // For Node.js (npm build)
                // sh 'npm install'
                // sh 'npm run build'
                // For Maven (Java project)
                // sh 'mvn clean install'
                // For other projects, adjust accordingly

                // Add a step to list the files in the workspace
                sh 'ls -R'
            }
        }
        stage('Deploy to AWS') {
            steps {
                echo 'Deploying to AWS...'
                withCredentials([usernamePassword(credentialsId: 'aws-jenkins-credentials', usernameVariable: 'AWS_ACCESS_KEY_ID', passwordVariable: 'AWS_SECRET_ACCESS_KEY')]) {
                    script {
                        // Debug: List files in the build directory
                        sh 'ls -R ./build'

                        // Ensure that the path to the build directory is correct
                        // If the build outputs to another directory (e.g., ./dist), change it here
                        sh '''
                        export AWS_ACCESS_KEY_ID=$AWS_ACCESS_KEY_ID
                        export AWS_SECRET_ACCESS_KEY=$AWS_SECRET_ACCESS_KEY
                        export AWS_DEFAULT_REGION=$AWS_DEFAULT_REGION

                        # Deploy to S3 using the correct path to your build output directory
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
