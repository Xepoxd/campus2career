pipeline {
    agent any
    environment {
        AWS_DEFAULT_REGION = 'us-east-1'  // Specify your AWS region
    }
    stages {
        stage('Clone GitHub Repo') {
            steps {
                checkout scm
            }
        }
        stage('Install Dependencies') {
            steps {
                echo 'Installing dependencies...'
                // Run composer to install dependencies for the Laravel project
                sh 'composer install --no-dev --optimize-autoloader'
            }
        }
        stage('Build Assets') {
            steps {
                echo 'Building assets...'
                // Example: If you are using frontend assets like using Vite, npm, or any other tools
                // sh 'npm install'  // If you have a frontend build process
                // sh 'npm run prod'  // For example, to build production assets
            }
        }
        stage('Deploy to AWS') {
            steps {
                echo 'Deploying entire project to AWS S3...'
                withCredentials([usernamePassword(credentialsId: 'aws-jenkins-credentials', usernameVariable: 'AWS_ACCESS_KEY_ID', passwordVariable: 'AWS_SECRET_ACCESS_KEY')]) {
                    script {
                        // Debug: List files in the project directory (to ensure everything is in place)
                        sh 'ls -R'  // List all files recursively in the project

                        // Deploy the entire project directory to the S3 bucket
                        // This will deploy all directories: app/, bootstrap/, config/, database/, public/, resources/, storage/, and other project files
                        sh '''
                        export AWS_ACCESS_KEY_ID=$AWS_ACCESS_KEY_ID
                        export AWS_SECRET_ACCESS_KEY=$AWS_SECRET_ACCESS_KEY
                        export AWS_DEFAULT_REGION=$AWS_DEFAULT_REGION

                        # Deploy the entire project to S3 (excluding certain files like .git, vendor, and node_modules)
                        aws s3 cp ./ s3://your-s3-bucket-name/ --recursive --exclude ".git/*" --exclude "vendor/*" --exclude "node_modules/*" --exclude "storage/*" --exclude "tests/*"
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
