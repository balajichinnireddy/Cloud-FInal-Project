terraform {
  required_providers {
    aws = {
      source  = "hashicorp/aws"
      version = "~> 3.27"
    }
  }
}

provider "aws" {
  profile = "default"
  region  = "us-east-1"
}

## Create VPC ##
resource "aws_vpc" "terraform-vpc" {
  cidr_block       = "10.0.0.0/16"
  enable_dns_hostnames = true
  tags = {
    Name = "vpc-cloud-final-project"
  }
}

output "aws_vpc_id" {
  value = "${aws_vpc.terraform-vpc.id}"
}

## Security Group##
resource "aws_security_group" "terraform_sg" {
  description = "Allow limited inbound external traffic"
  vpc_id      = "${aws_vpc.terraform-vpc.id}"
  name        = "terraform_sg"

  ingress {
    protocol    = "tcp"
    cidr_blocks = ["0.0.0.0/0"]
    from_port   = 80
    to_port     = 80
  }

  ingress {
    protocol    = "tcp"
    cidr_blocks = ["68.61.17.208/32"]
    from_port   = 3389
    to_port     = 3389
  }

  ingress {
    protocol    = "tcp"
    cidr_blocks = ["0.0.0.0/0"]
    from_port   = 443
    to_port     = 443
  }

  egress {
    protocol    = -1
    cidr_blocks = ["0.0.0.0/0"]
    from_port   = 0
    to_port     = 0
  }

  tags = {
    Name = "sg-cloud-final-project"
  }
}

output "aws_security_gr_id" {
  value = "${aws_security_group.terraform_sg.id}"
}

## Create Internet Gateway ##
resource "aws_internet_gateway" "terraform-ig" {
  vpc_id = "${aws_vpc.terraform-vpc.id}"

  tags = {
    Name = "ig-cloud-final-project"
  }
}

output "aws_ig_id"{
    value = "${aws_internet_gateway.terraform-ig.id}"
}

##Create Route##
resource "aws_route_table" "terraform-route" {
  vpc_id = "${aws_vpc.terraform-vpc.id}"

  route {
    cidr_block = "0.0.0.0/0"
    gateway_id = "${aws_internet_gateway.terraform-ig.id}"
  }

  tags = {
    Name = "route-cloud-final-project"
  }
}

output "aws_route_id"{
    value = "${aws_route_table.terraform-route.id}"
}

## Create Subnets ##
resource "aws_subnet" "terraform-subnet-1" {
  vpc_id     = "${aws_vpc.terraform-vpc.id}"
  cidr_block = "10.0.1.0/24"
  availability_zone = "us-east-1a"

  tags = {
    Name = "subnet-cloud-final-project"
  }
}

output "aws_subnet_subnet_1" {
  value = "${aws_subnet.terraform-subnet-1.id}"
}

resource "aws_instance" "terraform_wapp" {
    ami = "ami-09540c9779b451713"
    instance_type = "t2.xlarge"
    vpc_security_group_ids =  [ "${aws_security_group.terraform_sg.id}" ]
    subnet_id = "${aws_subnet.terraform-subnet-1.id}"
    key_name               = "CLOUD_FINAL_PROJECT"
    count         = 1
    associate_public_ip_address = true
    tags = {
      Name              = "EC2-CLOUD-FINAL-PROJECT"
      Environment       = "PRODUCTION"
      Project           = "CLOUD-FINAL-PROJECT"
    }
}

output "instance_id_list"     { value = ["${aws_instance.terraform_wapp.*.id}"] }
