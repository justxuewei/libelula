import { Table, Divider, Tag } from 'antd';

class user_list extends React.Component {

    columns = [
        {
            title: 'Name',
            dataIndex: 'name',
            key: 'name',
            render: text => <a>{text}</a>,
        },
        {
            title: 'Age',
            dataIndex: 'age',
            key: 'age',
        },
        {
            title: 'Address',
            dataIndex: 'address',
            key: 'address',
        },
        {
            title: 'Tags',
            key: 'tags',
            dataIndex: 'tags',
            render: tags => (
                <span>
        {tags.map(tag => {
            let color = tag.length > 5 ? 'geekblue' : 'green';
            if (tag === 'admin') {
                color = 'volcano';
            }
            return (
                <Tag color={color} key={tag}>
                    {tag.toUpperCase()}
                </Tag>
            );
        })}
      </span>
            ),
        },
        {
            title: 'Action',
            key: 'action',
            render: (text, record) => (
                <span>
        <a>Roles Change</a>
        <Divider type="vertical" />
        <a>Delete</a>
      </span>
            ),
        },
    ];

    data = [
        {
            key: '1',
            name: 'John Brown',
            age: 32,
            address: 'New York No. 1 Lake Park',
            tags: ['admin'],
        },
        {
            key: '2',
            name: 'Jim Green',
            age: 42,
            address: 'London No. 1 Lake Park',
            tags: ['customer'],
        },
        {
            key: '3',
            name: 'Joe Black',
            age: 32,
            address: 'Sidney No. 1 Lake Park',
            tags: ['customer', "VIP"],
        },
    ];

    render() {
        return (
            <Table columns={this.columns} dataSource={this.data} />
        )
    }
}

export default user_list;
